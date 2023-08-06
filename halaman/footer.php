</div>


<?php
function formatDuration($minutes)
{
    $hours = floor($minutes / 60);
    $remainingMinutes = $minutes % 60;

    if ($hours > 0) {
        return $hours . " jam " . $remainingMinutes . " menit";
    } else {
        return $remainingMinutes . " menit";
    }
}
function formatCurrency($amount)
{
    return "IDR " . number_format($amount, 0, ',', '.');
}
function timeSinceUpload($timestamp)
{
    $timeDiff = time() - strtotime($timestamp);

    $intervals = array(
        1 => array('tahun', 31556952),
        $timeDiff < 31556952 => array('bulan', 2629746),
        $timeDiff < 2629746 => array('minggu', 604800),
        $timeDiff < 604800 => array('hari', 86400),
        $timeDiff < 86400 => array('jam', 3600),
        $timeDiff < 3600 => array('menit', 60),
        $timeDiff < 60 => array('detik', 1)
    );

    foreach ($intervals as $interval => $value) {
        if ($timeDiff >= $value[1]) {
            $timeUnits = floor($timeDiff / $value[1]);
            return $timeUnits . ' ' . $value[0] . ' yang lalu';
        }
    }
}
?>
<footer class="main-footer tmf_production">
    <strong>Copyright &copy; 2014-
        <?php echo date('Y'); ?> <a style="text-transform: uppercase;" href="<?php echo $base_url; ?>">TMF
            Production</a>.
    </strong>
    All rights reserved.
</footer>

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
        var tmdb_id = <?php echo $tv_tmdb_id; ?>;
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