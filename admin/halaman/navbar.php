<?php include '../config/base_url.php'; ?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo $base_url; ?>/admin" class="nav-link">Home</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="dark-mode-toggle" href="#" role="button">
                <i id="dark-mode-icon" class="fas fa-sun"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="" data-toggle="modal" data-target="#modalLogout">
                <i class="fa fa-sign-out-alt"></i> Logout
            </a>
        </li>

    </ul>
</nav>

<script>
    var darkModeEnabled = false;

    // Check if dark mode is already enabled
    if (localStorage.getItem('darkModeEnabled') === 'true') {
        darkModeEnabled = true;
    }

    // Function to toggle dark mode
    function toggleDarkMode() {
        var icon = document.getElementById('dark-mode-icon');
        var body = document.body;

        if (darkModeEnabled) {
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
            body.classList.remove('dark-mode');
            localStorage.setItem('darkModeEnabled', 'false');
            darkModeEnabled = false;
        } else {
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
            body.classList.add('dark-mode');
            localStorage.setItem('darkModeEnabled', 'true');
            darkModeEnabled = true;
        }
    }

    // Initialize dark mode state
    if (darkModeEnabled) {
        document.getElementById('dark-mode-icon').classList.add('fa-moon');
        document.body.classList.add('dark-mode');
    }

    // Add event listener to toggle dark mode
    document.getElementById('dark-mode-toggle').addEventListener('click', toggleDarkMode);
</script>