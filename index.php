<?php include 'config/base_url.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Video Streaming</title>
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- i will provide this in description  -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/slick.css" />
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/slick-theme.css" />
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/animate.min.css" />
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/select2.min.css" />
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/select2-bootstrap4.min.css" />

  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/slick-animation.css" />
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/style.css" />
</head>

<body>
  <?php include 'halaman/header.php'; ?>
  <?php //include 'halaman/home_slider.php'; ?>

  <!-- main content starts  -->
  <div class="main-content">
    <!-- favorite section starts   -->
    <?php //include 'halaman/favorite.php'; ?>
    <!-- favourite section ends -->

    <!-- upcoming contents section starts  -->
    <?php //include 'halaman/upcoming.php'; ?>
    <!-- upcoming contents section ends -->

    <!-- top ten trending  -->
    <?php //include 'halaman/trending.php'; ?>

    <?php //include 'halaman/sugested.php'; ?>

    <!-- parallax section  -->
    <?php //include 'halaman/parallax.php'; ?>

    <!-- trending section  -->

    <?php //include 'halaman/trensing_selection.php'; ?>

    <?php //include 'halaman/sugested2.php'; ?>

  </div>
  <!-- main content ends  -->

  <?php //include 'halaman/footer.php'; ?>

  <!-- js files  -->
  <script src="<?php echo $base_url; ?>/assets/js/jquery-3.4.1.min.js"></script>
  <script src="<?php echo $base_url; ?>/assets/js/popper.min.js"></script>
  <script src="<?php echo $base_url; ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo $base_url; ?>/assets/js/slick.min.js"></script>
  <script src="<?php echo $base_url; ?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo $base_url; ?>/assets/js/select2.min.js"></script>
  <script src="<?php echo $base_url; ?>/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo $base_url; ?>/assets/js/slick-animation.min.js"></script>

  <script src="<?php echo $base_url; ?>/assets/main.js"></script>
</body>

</html>