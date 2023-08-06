</div>
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

<script>
    function hideSkeletonScreen() {
        document.getElementById("skeletonScreen").style.display = "none";
        document.getElementById("content").style.display = "block";
    }

    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function () {
            hideSkeletonScreen();
        }, 30000);
    });
</script>
</body>

</html>