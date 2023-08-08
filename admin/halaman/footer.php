<footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
        PANEL ADMIN
    </div>
    <strong>Copyright &copy; 2023 @rifkkimaulana.</strong> All rights reserved.
</footer>

<script>
    function hideSkeletonScreen() {
        document.getElementById("skeletonScreen").style.display = "none";
        document.getElementById("content").style.display = "block";
    }

    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function () {
            hideSkeletonScreen();
        }, 300);
    });
</script>