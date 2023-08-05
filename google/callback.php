<?php
include '../config/koneksi.php';
include '../config/base_url.php';
include 'secrets.php';
function getAccessToken($code)
{
    global $client_id, $client_secret, $redirect_uri;

    $params = array(
        'code' => $code,
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => $redirect_uri,
        'grant_type' => 'authorization_code',
    );
    $url = 'https://oauth2.googleapis.com/token';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($result, true);

    if (isset($response['access_token'])) {
        return $response['access_token'];
    } else {
        return null;
    }
}

if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $access_token = getAccessToken($code);

    // Validasi access token dari Google
    if ($access_token) {
        $url = 'https://www.googleapis.com/oauth2/v1/userinfo?access_token=' . $access_token;
        $result = file_get_contents($url);

        if ($result === false) {
            // Jika terjadi kesalahan saat meminta informasi pengguna
            $error = error_get_last();
            header("Location:" . $base_url . "login.php?alert=failed_token&error_message=" . urlencode($error['message']));
            exit();
        }

        $userInfo = json_decode($result, true);

        if (isset($userInfo['email'])) {

            $email = $userInfo['email'];

            $stmt = $koneksi->prepare("SELECT * FROM tb_users WHERE email=?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $level = $row['user_level'];

                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['id'] = $row['user_id'];
                $_SESSION['nama'] = $row['user_nama'];
                $_SESSION['username'] = $row['user_username'];
                $_SESSION['level'] = $row['user_level'];

                if ($level == "administrator") {
                    $_SESSION['status'] = "administrator_logedin";
                    header("location: " . $base_url . "/admin/");
                    exit();
                } else if ($level == "manajemen") {
                    $_SESSION['status'] = "manajemen_logedin";
                    header("location: " . $base_url . "/manajemen/");
                    exit();
                } else {
                    header("location: " . $base_url . "login.php?alert=email_tidak_terdaftar");
                    exit();
                }
            } else {
                header("location: " . $base_url . "login.php?alert=email_tidak_terdaftar");
                exit();
            }
        } else {
            header("location: " . $base_url . "login.php?alert=email_tidak_terdaftar");
            exit();
        }
    } else {
        header("Location: " . $base_url . "login.php?alert=failed_token");
        exit();
    }
} else {
    header("Location: " . $base_url . "login.php?alert=invalid_response");
    exit();
}
?>