<?php
include '../config/koneksi.php';
include '../halaman/header.php';

if (isset($_SESSION['status']) && ($_SESSION['status'] == "administrator_logedin" || $_SESSION['status'] == "manajemen_logedin")) {
    if ($_SESSION['level'] == "administrator") {
        header("location: " . $base_url . "/admin/");
        exit();
    } else if ($_SESSION['level'] == "manajemen") {
        header("location: " . $base_url . "/manajemen/");
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
                $description_log = 'Berhasil di arahkan ke halaman admin.';
                $action = 'login';
                include '../config/insert_log.php';
                header("location: " . $base_url . "/admin/");
                exit();
            } else if ($row['user_level'] == "manajemen") {
                $_SESSION['status'] = "manajemen_logedin";
                $description_log = 'Berhasil diarahkan ke halaman user.';
                $action = 'login';
                include '../config/insert_log.php';
                header("location: " . $base_url . "/manajemen/");
                exit();
            } else {
                $description_log = 'Gagal, Data pengguna tidak ditemukan.';
                $action = 'login';
                include '../config/insert_log.php';
                header("location: " . $base_url . "/login/index.php?alert=userLevel_notFound");
                exit();
            }
        } else {
            $description_log = 'Gagal, password salah.';
            $action = 'login';
            include '../config/insert_log.php';
            header("location: " . $base_url . "/login/index.php?alert=passwordSalah");
            exit();
        }
    } else {
        $description_log = 'Gagal, Data pengguna tidak ditemukan.';
        $action = 'login';
        include '../config/insert_log.php';
        header("location: " . $base_url . "/login/index.php?alert=userNotFound");
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

<div class="login-page bg-white">
    <div class="login-box">
        <div class="card">
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
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
                        </div>
                    </div>
                </form>
                <p class="mt-1">
                    <a href="<?php echo $base_url; ?>/login/forgot_password.php">I forgot my password</a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php include 'modal.php'; ?>
<?php include '../halaman/footer.php'; ?>