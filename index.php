<!doctype html>
<html lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" href="img/icon.png" type="img/png" sizes="48x48">


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/mystyle.css">


<!-- https://fonts.google.com/icons -->
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

<title>Grostop</title>
</head>
<body>

<!-- header -->
<?php // include 'header.php';?>
<!-- header -->


<!-- main -->
<?php include 'homepage.php';?>
<!-- main -->


<!-- footer -->
<?php // include 'footer.php';?>
<!-- footer -->

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script>
$(document).ready(function() {
  $("#carouselBanner").owlCarousel({
      navigation : false, // Show next and prev buttons
      responsive: true,
      autoPlay : true,
      slideSpeed : 200,
      pagination: true,
      paginationSpeed : 400,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
  });
  $("#carouselTestimonials").owlCarousel({
      navigation : false, // Show next and prev buttons
      responsive: true,
      autoPlay : true,
      slideSpeed : 200,
      pagination: true,
      paginationSpeed : 400,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
  });
  
});    
</script>
</body>
</html>