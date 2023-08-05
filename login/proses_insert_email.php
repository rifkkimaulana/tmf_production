<?php
include 'config/base_url.php';
include 'config/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $email = $_POST['email'];

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

        include 'wa_gateway.php';

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
            header("Location: insert_email.php?error=email_tidak_ditemukan");
            exit();
        }

        $koneksi->close();

        header("Location: insert_email.php?success=email_berhasil_diverifikasi");
        exit();
    } else {
        header("Location: insert_email.php?error=email_tidak_ditemukan");
        exit();
    }
}
function generateToken()
{
    $token = bin2hex(random_bytes(8));
    return $token;
}