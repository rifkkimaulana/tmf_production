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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>