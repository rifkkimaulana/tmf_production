<?php
include 'config/base_url.php';
session_start();
?>

<script>
    function sendPostData() {
        const data = {
            username: 'asjodbfojabsdf',
            action: 'logout',
            description_log: 'Menghentikan sesion.'
        };

        const endpointUrl = '<?php echo $base_url . "/config/insert_log.php"; ?>';

        // Konfigurasi untuk pengiriman data POST
        const requestOptions = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        };

        // Melakukan pengiriman POST menggunakan fetch API
        fetch(endpointUrl, requestOptions)
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error('Terjadi kesalahan:', error);
            });
    }
    document.addEventListener("DOMContentLoaded", function () {
        sendPostData();
    });
</script>

<?php
session_unset();
session_destroy();

setcookie("remember_me", "", time() - 3600, "/");
?>