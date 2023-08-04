<?php
include 'config/koneksi.php';
$reset_token = $_GET['token'];
$reset_token = mysqli_real_escape_string($koneksi, $reset_token);

$query = "SELECT * FROM tb_users WHERE reset_token='$reset_token'";
$result = mysqli_query($koneksi, $query);

$reset_query = "SELECT * FROM tb_users WHERE reset_token='$reset_token'";
$reset_hasil = mysqli_query($koneksi, $reset_query);
$row = mysqli_fetch_assoc($reset_hasil);
$id_reset = $row['reset_id'];

$query = "UPDATE tb_log_whatsapp SET status='Berhasil' WHERE id_pesan='$id_reset'";
mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password === $confirm_password) {
            $row = mysqli_fetch_assoc($result);
            $reset_token = $row['reset_token'];

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $query = "UPDATE tb_users SET reset_token=NULL, user_password='$hashed_password' WHERE reset_token='$reset_token'";
            mysqli_query($koneksi, $query);

            header("Location: login.php?alert=berhasil_update_password");
            exit();
        } else {
            header("Location: login.php?alert=password_tidak_sesuai");
            exit();
        }
    }
} else {
    header("Location: login.php?alert=token_expired");
    exit();
}
?>

<?php include 'halaman/header.php'; ?>
<div class="login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>TMF</b>PRODUCTION</a>
            </div>

            <div class="card-body">
                <p class="login-box-msg">Silahkan Masukan Password baru anda!!!</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Confirm Password"
                            name="confirm_password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Change password</button>
                        </div>
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <a href="<?php echo $base_url; ?>login.php">Login</a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php include 'halaman/footer.php'; ?>