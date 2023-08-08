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
<script>
    var darkModeEnabled = false;

    if (localStorage.getItem("darkModeEnabled") === "true") {
        darkModeEnabled = true;
    }

    function toggleDarkMode() {
        var icon = document.getElementById("dark-mode-icon");
        var body = document.body;

        if (darkModeEnabled) {
            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");
            body.classList.remove("dark-mode");
            localStorage.setItem("darkModeEnabled", "false");
            darkModeEnabled = false;
        } else {
            icon.classList.remove("fa-sun");
            icon.classList.add("fa-moon");
            body.classList.add("dark-mode");
            localStorage.setItem("darkModeEnabled", "true");
            darkModeEnabled = true;
        }
    }

    if (darkModeEnabled) {
        document.getElementById("dark-mode-icon").classList.add("fa-moon");
        document.body.classList.add("dark-mode");
    }
    document
        .getElementById("dark-mode-toggle")
        .addEventListener("click", toggleDarkMode);
</script>