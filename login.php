<?php
include 'config/koneksi.php';
if (isset($_SESSION['status']) && ($_SESSION['status'] == "administrator_logedin" || $_SESSION['status'] == "manajemen_logedin")) {
    if ($_SESSION['level'] == "administrator") {
        header("location: admin/");
        exit();
    } else if ($_SESSION['level'] == "manajemen") {
        header("location: manajemen/");
        exit();
    }
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $koneksi->prepare("SELECT * FROM tb_users WHERE user_username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['user_password'];

        if (password_verify($password, $hashedPassword)) {
            session_start();
            $_SESSION['id'] = $row['user_id'];
            $_SESSION['nama'] = $row['user_nama'];
            $_SESSION['username'] = $row['user_username'];
            $_SESSION['level'] = $row['user_level'];
            if ($row['user_level'] == "administrator") {
                $_SESSION['status'] = "administrator_logedin";
                header("location:admin/");
                exit();
            } else if ($row['user_level'] == "manajemen") {
                $_SESSION['status'] = "manajemen_logedin";
                header("location:manajemen/");
                exit();
            } else {
                header("location:login.php?alert=gagal");
                exit();
            }
        } else {
            header("location:login.php?alert=gagal");
            exit();
        }
    } else {
        header("location:login.php?alert=gagal");
        exit();
    }
}
if (isset($_POST['remember'])) {
    $remember = true;
    setcookie("remember_me", "1", time() + (7 * 24 * 60 * 60), "/", "", true, true);
} else {
    $remember = false;
    setcookie("remember_me", "", time() - 3600, "/", "", true, true);
}
if (isset($_COOKIE['remember_me'])) {
    $remember = true;
} else {
    $remember = false;
}
?>
<?php include 'halaman/header.php'; ?>
<div class="login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?php echo $base_url; ?>" class="h1"><b>TMF</b>PRODUCTION</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="<?php echo $base_url; ?>/google/login.php" class="btn btn-block btn-danger">
                        <i class="fab fa-google mr-2"></i> Sign in using Google
                    </a>
                </div>
                <h5 class="text-center">
                    ATAU
                </h5>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="username" class="form-control" placeholder="Username" name="username" required
                            autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember" <?php if ($remember)
                                    echo "checked"; ?>>
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
                        </div>
                    </div>
                </form>
                <br>


                <p class="mb-1">
                    <a href="<?php echo $base_url; ?>/insert_email.php">I forgot my password</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tokenExpired" tabindex="-1" role="dialog" aria-labelledby="tokenExpiredModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tokenExpiredModalLabel">Token Expired</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Token Anda telah kedaluwarsa. Silakan coba kembali untuk mereset password.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="gagalLoginModal" tabindex="-1" role="dialog" aria-labelledby="gagalLoginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gagalLoginModalLabel">Gagal Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Username atau password yang Anda masukkan salah.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="passwordMismatchModal" tabindex="-1" role="dialog"
    aria-labelledby="passwordMismatchModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordMismatchModalLabel">Peringatan!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Password tidak cocok. Harap pastikan password dan konfirmasi password sesuai. Silahkan buka kembali link
                yang dikirimkan melalui whatsapp!.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="passwordSuccessModal" tabindex="-1" role="dialog"
    aria-labelledby="passwordSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordSuccessModalLabel">Password Berhasil Diupdate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Password Anda berhasil diupdate.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="emailNotFound" tabindex="-1" role="dialog" aria-labelledby="emailNotFoundModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emailNotFoundModalLabel">Email Tidak Terdaftar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Email yang Anda masukkan tidak terdaftar.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="failedToken" tabindex="-1" role="dialog" aria-labelledby="failedTokenModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="failedTokenModalLabel">Failed Token</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Token gagal diverifikasi.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="invalidResponseModal" tabindex="-1" role="dialog"
    aria-labelledby="invalidResponseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="invalidResponseModalLabel">Invalid Response</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Response tidak valid.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        const urlParams = new URLSearchParams(window.location.search);
        const alertParam = urlParams.get('alert');

        if (alertParam === 'gagal') {
            $('#gagalLoginModal').modal('show');
        } else if (alertParam === 'password_tidak_sesuai') {
            $('#passwordMismatchModal').modal('show');
        } else if (alertParam === 'berhasil_update_password') {
            $('#passwordSuccessModal').modal('show');
        } else if (alertParam === 'email_tidak_terdaftar') {
            $('#emailNotFound').modal('show');
        } else if (alertParam === 'invalid_response') {
            $('#invalidResponseModal').modal('show');
        } else if (alertParam === 'token_expired') {
            $('#tokenExpired').modal('show');
        } else if (alertParam === 'failed_token') {
            $('#failedToken').modal('show');
        }
    });
</script>