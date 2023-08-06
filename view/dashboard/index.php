<?php
if (isset($_GET['search']) && !empty($_GET['search'])) {
    include 'search_movies_tv.php';
} else {
    include 'all_movies_tv.php';
}

include 'widgets_dashboard.php';
?>