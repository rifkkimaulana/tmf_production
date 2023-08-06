</div>
<footer class="main-footer tmf_production">
    <strong>Copyright &copy; 2014-
        <?php echo date('Y'); ?> <a style="text-transform: uppercase;" href="<?php echo $base_url; ?>">TMF
            Production</a>.
    </strong>
    All rights reserved.
</footer>

<!-- Tombol untuk menguji modal -->
<button type="button" class="btn btn-primary" id="testButton">Test Modal Loading</button>

<!-- Modal Loading (sesuai contoh sebelumnya) -->
<div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <span class="ml-2">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hubungkan dengan jQuery dan AdminLTE JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0-alpha/dist/js/adminlte.min.js"></script>

<script>
    // Fungsi untuk menampilkan modal loading
    function showLoadingModal() {
        $('#loadingModal').modal('show');
    }

    // Fungsi untuk menyembunyikan modal loading
    function hideLoadingModal() {
        $('#loadingModal').modal('hide');
    }

    // Event untuk menampilkan modal loading saat tombol diklik
    $(document).ready(function () {
        $('#testButton').on('click', function () {
            showLoadingModal(); // Menampilkan modal loading saat tombol diklik
            // Untuk simulasi, tambahkan jeda 2 detik sebelum menyembunyikan modal loading
            setTimeout(function () {
                hideLoadingModal(); // Menyembunyikan modal loading setelah 2 detik simulasi "memuat halaman"
            }, 2000);
        });
    });
</script>

<script src="<?php echo $base_url; ?>/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo $base_url; ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $base_url; ?>/assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo $base_url; ?>/assets/plugins/select2/js/select2.min.js"></script>

<script>
    $(document).ready(function () {
        $('#belumkepake').select2();
    });
    var iframe = document.querySelector("iframe");
    var lewatiNotification = document.querySelector(".lewati-notification");

    setTimeout(function () {
        lewatiNotification.style.display = "block";
    }, 5000);
    lewatiNotification.querySelector("a").addEventListener("click", function (event) {
        event.preventDefault();
        var link_film = this.getAttribute("href");
        iframe.remove();
        window.location.href = link_film;
    });
</script>

<script>
    function reloadViewCount() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("viewCount").innerHTML = "<b>" + this.responseText + "x ditonton</b>";
            }
        };
    }

    setInterval(reloadViewCount, 60000);
    document.addEventListener("DOMContentLoaded", function () {
        var tmdb_id = <?php if (empty($tv_tmdb_id)) {
            echo $tmdb_id;
        } else {
            echo $tv_tmdb_id;
        }
        ?>;
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "<?php echo $base_url; ?>/config/visit.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("berkunjung=" + tmdb_id);
    });

    var inputField = document.getElementById("komentar");
    var kirimBtn = document.getElementById("kirimBtn");
    var batalBtn = document.getElementById("batalBtn");

    inputField.addEventListener("focus", function () {
        kirimBtn.style.display = "inline-block";
        batalBtn.style.display = "inline-block";
    });

    batalBtn.addEventListener("click", function () {
        kirimBtn.style.display = "none";
        batalBtn.style.display = "none";
    });

</script>
<script>
    var descriptionElement = document.getElementById("filmDescription");
    var showMoreLink = document.getElementById("showMoreLink");
    var toggleState = false;
    var limitedDescription = "<?php echo $limited_description; ?>";
    var fullDescription = "<?php echo $full_description; ?>";

    function toggleDescription() {
        toggleState = !toggleState;
        if (toggleState) {
            descriptionElement.innerHTML = fullDescription;
            showMoreLink.innerHTML = "Sedikit";
        } else {
            descriptionElement.innerHTML = limitedDescription;
            showMoreLink.innerHTML = "Lebih Banyak";
        }
    }
</script>
</body>

</html>