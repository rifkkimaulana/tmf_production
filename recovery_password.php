<?php
include 'config/koneksi.php';
include 'halaman/header.php';

$reset_token = $_GET['token'];
$reset_token = mysqli_real_escape_string($koneksi, $reset_token);

$query_user = "SELECT * FROM tb_users WHERE reset_token='$reset_token'";
$result_user = mysqli_query($koneksi, $query_user);

if (mysqli_num_rows($result_user) > 0) {
    if (isset($_POST['update'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if ($password === $confirm_password) {
                $row_user = mysqli_fetch_assoc($result_user);

                $reset_token = $row_user['reset_token'];
                $id_reset = $row_user['reset_id'];

                $query_wa = "UPDATE tb_log_whatsapp SET status='Berhasil' WHERE id_pesan='$id_reset'";
                mysqli_query($koneksi, $query_wa);

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $query = "UPDATE tb_users SET reset_token=NULL, user_password='$hashed_password' WHERE reset_token='$reset_token'";
                mysqli_query($koneksi, $query);

                $username = $row_user['user_nama'];
                $action = 'update password';
                $description_log = 'berhasil membuat password baru';
                $ip_address = $_SERVER['REMOTE_ADDR'];
                $timestamp = date('Y-m-d H:i:s');
                $query_log = "INSERT INTO tb_logs_aplikasi (timestamp, username, action, description, ip_address)
                    VALUES (?, ?, ?, ?, ?)";

                $stmt = mysqli_prepare($koneksi, $query_log);
                mysqli_stmt_bind_param($stmt, "sssss", $timestamp, $username, $action, $description_log, $ip_address);


                header("location: " . $base_url . "/login/index.php?alert=suksesUpdatePassword");
                exit();
            } else {
                header("location: " . $base_url . "/recovery_password.php?token=" . $reset_token . "&alert=passwordMismatch");
                exit();
            }
        }
    }
} else {
    header("location: " . $base_url . "/login/index.php?alert=tokenExpired");
    exit();
}

?>
<div class="login-page bg-white">
    <div class="login-box">
        <div class="card">
            <div class="card-header text-center">
                <a href="<?php echo $base_url; ?>" class="h1"><b>TMF</b>PRODUCTION</a>
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
                            <button type="submit" name="update" class="btn btn-primary btn-block">Change
                                password</button>
                        </div>
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <a href="<?php echo $base_url; ?>/login/login.php">Back Login</a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php include 'login/modal.php'; ?>
<?php include 'halaman/footer.php'; ?>