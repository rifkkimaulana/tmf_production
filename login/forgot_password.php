<?php
include '../config/base_url.php';

function generateToken()
{
    $token = bin2hex(random_bytes(8));
    return $token;
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    include '../config/koneksi.php';
    $email = mysqli_real_escape_string($koneksi, $email);

    $query = "SELECT * FROM tb_users WHERE email='$email'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $noWa = $row['no_wa'];
        $id_reset = $row['reset_id'];

        $token = generateToken();

        $query = "UPDATE tb_users SET reset_token='$token' WHERE email='$email'";
        mysqli_query($koneksi, $query);

        $recoveryURL = $base_url . '/recovery_password.php?token=' . $token;
        $message = "Permintaan reset password diterima. Klik link berikut: $recoveryURL";

        include '../config/wa_gateway.php';

        $query = "SELECT no_wa FROM tb_users WHERE email='$email'";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $no_wa = $row['no_wa'];

            $curl = curl_init();

            $data = [
                'phone' => $no_wa,
                'message' => $message,
            ];
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                "Authorization: $token",
            ]);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($curl, CURLOPT_URL, $link_server);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            $result = curl_exec($curl);
            curl_close($curl);

            $response = json_decode($result, true);

            $device_id = $response['data']['device_id'];
            $pesan = $data['message'];
            $status = $response['data']['messages'][0]['status'];
            $id_pesan = $response['data']['messages'][0]['id'];

            $query = "UPDATE tb_users SET reset_id='$id_pesan' WHERE email='$email'";
            mysqli_query($koneksi, $query);

            $sql = "INSERT INTO tb_log_whatsapp (device_id, no_wa, pesan, status, id_pesan) VALUES ('$device_id', '$no_wa', '$pesan', '$status', '$id_pesan')";
            if (mysqli_query($koneksi, $sql)) {
                echo "Data berhasil disimpan ke dalam database.";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
            }

        } else {
            header("location: " . $base_url . "/login/forgot_password.php?alert=emailNotFound");
            exit();
        }

        $koneksi->close();

        header("location: " . $base_url . "/login/login.php?alert=sendSukses");
        exit();
    } else {
        header("location: " . $base_url . "/login/forgot_password.php?alert=emailNotFound");
        exit();
    }
}
?>
<?php
include '../halaman/header.php';
?>

<div class="login-page bg-white">
    <div class="login-box">
        <div class="card">
            <div class="card-header text-center">
                <a href="<?php echo $base_url; ?>/" class="h1"><b>TMF</b>PRODUCTION</a>
            </div>

            <div class="card-body">
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Request new
                                password</button>
                        </div>
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="<?php echo $base_url; ?>/login.php">Login</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="emailNotFound" tabindex="-1" role="dialog" aria-labelledby="emailNotFoundModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emailNotFoundModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Email tidak ditemukan. Silakan coba lagi.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="emailSuccessModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Email berhasil diverifikasi! Silahkan cek whatsapp anda kami telah mengirimkan link reset password!
            </div>
            <div class="modal-footer">
                <a href="<?php echo $base_url; ?>" class="btn btn-primary">Masuk</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('success') === 'email_berhasil_diverifikasi') {
            $('#emailSuccessModal').modal('show');
        }
    });
</script>

<?php include '../halaman/footer.php'; ?>