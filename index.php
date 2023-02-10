<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/boxicons.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/meanmenu.css">
<link rel="stylesheet" href="assets/css/fancybox.min.css">
<link rel="stylesheet" href="assets/css/odometer.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/scrollCue.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/dark.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<title>Restaurant</title>
<link rel="icon" type="image/webp" href="assets/images/logo-2.png">
</head>
<body>

<div class="preloader">
<div class="loader">
<div class="loader-outter"></div>
<div class="loader-inner"></div>
<span>Restaurant</span>
</div>
</div>


<div class="switch-theme-mode">
<label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label>
</div>


<div class="navbar-area">

<div class="container">
<div class="mobile-nav">
<div class="logo">
<a href="index.php">
<img src="assets/images/logo.png" class="logo-light" alt="images">
<img src="assets/images/logo.png" class="logo-dark" alt="images">
</a>
</div>
</div>
</div>

<div class="main-nav">
<div class="container-fluid">
<?php include ('includes/navbar.php'); ?>
</div>
</div>
<div class="others-option-for-responsive">
<div class="container">
<div class="dot-menu">
<div class="inner">
<div class="circle circle-one"></div>
<div class="circle circle-two"></div>
<div class="circle circle-three"></div>
</div>
</div>
<div class="container">
<div class="option-inner">
<div class="others-option justify-content-center d-flex align-items-center">
<div class="option-item">
<i class='bx bx-search search-btn'></i>
<i class='bx bx-x close-btn'></i>
<div class="search-overlay search-popup">
<div class='search-box'>
<form class="search-form">
<input class="search-input" placeholder="Search..." type="text">
<button class="search-button" type="submit">
<i class='bx bx-search'></i>
</button>
</form>
</div>
</div>
</div>
<div class="option-item">
<div class="shapping-bag">
<a href="cart.php">
<img src="assets/images/shopping-bag-icon.svg" alt="images">
</a>
<div class="shapping-text">
01
</div>
</div>
</div>
<div class="option-item">
<a href="booking-table.php" class="default-btn">Book A Table</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="banner-area">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="single-banner-content">
<span data-cue="slideInUp" data-duration="800">Welcome To Oer Restaurant</span>
<h1 data-cue="slideInUp" data-duration="1800">Our Restaurant Offers Delicious & Seafood</h1>
<p data-cue="slideInUp" data-duration="2000">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled item demoralized by the charms of pleasure of the moment with a righteous hand, we denounce with righteous indignation.</p>
<a href="about.php" class="default-btn" data-cue="slideInUp" data-duration="2500">Read More</a>
</div>
</div>
<div class="col-lg-6" data-cue="zoomIn" data-duration="2000">
<div class="single-banner-image">
<img src="assets/images/banner/banner-img-2.webp" alt="images">
</div>
</div>
</div>
</div>
<div class="banner-shape-1">
<img src="assets/images/banner/banner-shape-1.webp" alt="images">
</div>
<div class="banner-shape-2">
<img src="assets/images/banner/banner-shape-2.webp" alt="images">
</div>
<div class="banner-shape-3">
<img src="assets/images/banner/banner-shape-3.webp" alt="images">
</div>
<div class="banner-shape-4">
<img src="assets/images/banner/banner-shape-4.webp" alt="images">
</div>
<div class="banner-shape-5">
<img src="assets/images/banner/banner-shape-5.webp" alt="images">
</div>
</div>


<div class="discover-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
<div class="single-discover-card">
<img src="assets/images/discover/discover-1.webp" alt="images">
<h3>Fresh Products</h3>
<p>There are many variations of passages of ailable but the majority have saite.</p>
<a href="#" class="discover-more">Discover More</a>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
<div class="single-discover-card">
<img src="assets/images/discover/discover-2.webp" alt="images">
<h3>Skilled Chefs</h3>
<p>There are many variations of passages of ailable but the majority have saite.</p>
<a href="#" class="discover-more">Discover More</a>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
<div class="single-discover-card">
<img src="assets/images/discover/discover-3.webp" alt="images">
<h3>Best Bar</h3>
<p>There are many variations of passages of ailable but the majority have saite.</p>
<a href="#" class="discover-more">Discover More</a>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
<div class="single-discover-card">
<img src="assets/images/discover/discover-4.webp" alt="images">
<h3>Vegan Cuisine</h3>
<p>There are many variations of passages of ailable but the majority have saite.</p>
<a href="#" class="discover-more">Discover More</a>
</div>
</div>
</div>
</div>
</div>


<div class="about-area pt-100 pb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6" data-cue="slideInLeft" data-duration="800">
<div class="about-image">
<img src="assets/images/about/about-img-1.webp" alt="images">
</div>
</div>
<div class="col-lg-6" data-cue="slideInRight" data-duration="800">
<div class="single-about-content">
<div class="section-title left-title">
<span class="top-title">About Us</span>
<h2>Enjoy An Exceptional Journey Of Taste In Our Restaurant</h2>
<p>On the other hand, we denounce with righteous indignation and dislike men who are mantis
beguiled aitem demora lized by the charms of pleasure of the moment.</p>
</div>
<div class="row">
<div class="col-lg-6 col-sm-6 col-md-6">
<div class="speciallst-card">
<h3><img src="assets/images/about/about-img-3.webp" alt="images">Speciallst</h3>
<p>bled it to make a type specimen boIt has survived not amnits.</p>
</div>
</div>
<div class="col-lg-6 col-sm-6 col-md-6">
<div class="speciallst-card">
<h3><img src="assets/images/about/about-img-4.webp" alt="images">Restaurant</h3>
<p>bled it to make a type specimen boIt has survived not amnits.</p>
</div>
</div>
</div>
<ul>
<li><i class='bx bx-right-arrow-circle'></i>Mauris mattis lectus eget ligula dapibus, ac maximus ipsum Services.</li>
<li><i class='bx bx-right-arrow-circle'></i>Aenean facilisis erat et metus semper molestie sem posuere tests.</li>
</ul>
<a href="booking-table.php" class="default-btn">Booking Now</a>
</div>
</div>
</div>
</div>
<div class="about-shape-1">
<img src="assets/images/about/about-shape-1.webp" alt="images">
</div>
<div class="about-shape-2">
<img src="assets/images/about/about-shape-2.webp" alt="images">
</div>
<div class="about-shape-3">
<img src="assets/images/about/about-shape-3.webp" alt="images">
</div>
<div class="about-shape-4">
<img src="assets/images/about/about-shape-4.webp" alt="images">
</div>
</div>


<div class="from-our-menu-area pt-100 pb-100 jarallax" data-jarallax='{"speed": 0.3}'>
<div class="from-our-menu-area">
<div class="container">
<div class="section-title">
<span class="top-title">From Our Menu</span>
<h2>Try Our Special Offers</h2>
</div>
<div class="menu-tabs">
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Diner</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Lunch</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Brunch</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="dessert-tab" data-bs-toggle="tab" data-bs-target="#dessert-tab-pane" type="button" role="tab" aria-controls="dessert-tab-pane" aria-selected="false">Dessert</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="wine-tab" data-bs-toggle="tab" data-bs-target="#wine-tab-pane" type="button" role="tab" aria-controls="wine-tab-pane" aria-selected="false">Wine</button>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
<div class="menu-tabs-content">
<div class="from-menu-slider owl-carousel owl-theme">
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/bbq chicken shawarma.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>BBQ chicken shawarma</h3></a>
<p>$231.00 - <del>$364.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Chalupa.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Chalupa</h3></a>
<p>$195.00 - <del>$254.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Chilaquiles.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Chilaquiles</h3></a>
<p>$95.00 - <del>$124.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Chiles en nogada.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Chiles en nogada</h3></a>
<p>$150.00 - <del>$204.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Cocido.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Cocido</h3></a>
<p>$231.00 - <del>$364.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Elote.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Elote</h3></a>
<p>$195.00 - <del>$254.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Enchiladas.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Enchiladas</h3></a>
<p>$95.00 - <del>$124.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Fajitas.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Fajitas</h3></a>
<p>$150.00 - <del>$204.00</del></p>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
<div class="from-menu-slider owl-carousel owl-theme">
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Guacamole.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Guacamole</h3></a>
<p>$231.00 - <del>$364.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Machaca.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
 </div>
<div class="menu-text">
<a href="menu-details.php"><h3>Machaca</h3></a>
<p>$195.00 - <del>$254.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Menudo.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Menudo</h3></a>
<p>$95.00 - <del>$124.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Mexican Shawarma Plate.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Mexican Shawarma Plate</h3></a>
<p>$150.00 - <del>$204.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Mole.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Mole</h3></a>
<p>$231.00 - <del>$364.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Molotes.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Molotes</h3></a>
<p>$195.00 - <del>$254.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Picadillo.png" alt="images">
</a>
<div class="add-to-card">
 <a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Picadillo</h3></a>
<p>$95.00 - <del>$124.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Pozole.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Pozole</h3></a>
<p>$150.00 - <del>$204.00</del></p>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
<div class="from-menu-slider owl-carousel owl-theme">
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Queso.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Queso</h3></a>
<p>$231.00 - <del>$364.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Tacos al pastor.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Tacos al pastor</h3></a>
<p>$195.00 - <del>$254.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Tamales.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Tamales</h3></a>
<p>$95.00 - <del>$124.00</del></p>
</div>
 </div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Tostadas.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Tostadas</h3></a>
<p>$150.00 - <del>$204.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Tripas.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Tripas</h3></a>
<p>$231.00 - <del>$364.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Cocido.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Cocido</h3></a>
<p>$195.00 - <del>$254.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Fajitas.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Fajitas</h3></a>
<p>$95.00 - <del>$124.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Machaca.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Machaca</h3></a>
<p>$150.00 - <del>$204.00</del></p>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="dessert-tab-pane" role="tabpanel" aria-labelledby="dessert-tab" tabindex="0">
<div class="from-menu-slider owl-carousel owl-theme">
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Chalupa.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Chalupa</h3></a>
<p>$231.00 - <del>$364.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Tacos al pastor.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Tacos al pastor</h3></a>
<p>$195.00 - <del>$254.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Molotes.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Molotes</h3></a>
<p>$95.00 - <del>$124.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Queso.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Queso</h3></a>
<p>$150.00 - <del>$204.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Elote.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Elote</h3></a>
<p>$231.00 - <del>$364.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Guacamole.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Guacamole</h3></a>
<p>$195.00 - <del>$254.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Chiles en nogada.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Chiles en nogada</h3></a>
<p>$95.00 - <del>$124.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Enchiladas.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Enchiladas</h3></a>
<p>$150.00 - <del>$204.00</del></p>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="wine-tab-pane" role="tabpanel" aria-labelledby="wine-tab" tabindex="0">
<div class="from-menu-slider owl-carousel owl-theme">
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Cocido.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Cocido</h3></a>
<p>$231.00 - <del>$364.00</del></p>
 </div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Elote.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Elote</h3></a>
<p>$195.00 - <del>$254.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Fajitas.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Fajitas</h3></a>
<p>$95.00 - <del>$124.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Tacos al pastor.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Tacos al pastor</h3></a>
<p>$150.00 - <del>$204.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Pozole.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Pozole</h3></a>
<p>$231.00 - <del>$364.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Chalupa.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Chalupa</h3></a>
 <p>$195.00 - <del>$254.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Tostadas.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Tostadas</h3></a>
<p>$95.00 - <del>$124.00</del></p>
</div>
</div>
<div class="single-menu-card">
<a href="menu-details.php">
<img src="assets/images/dish/Chilaquiles.png" alt="images">
</a>
<div class="add-to-card">
<a href="cart.php" class="default-btn">Add To Cart</a>
</div>
<div class="menu-text">
<a href="menu-details.php"><h3>Chilaquiles</h3></a>
<p>$150.00 - <del>$204.00</del></p>
</div>
</div>
</div>
</div>
</div>
<div class="menu-view-btn">
<a href="menu-details.php" class="default-btn">View All</a>
</div>
</div>
</div>
</div>
</div>


<div class="odometer-area pt-100 pb-100">
<div class="container">
<div class="row">
<div class="col-lg-2 col-12 col-sm-2 col-md-2" data-cues="fadeIn" data-duration="1500">
<div class="fun-odometer">
<h2>
<span class="odometer" data-count="287">00</span>
<span class="target">+</span>
</h2>
<p>Clients Every Day</p>
</div>
</div>
<div class="col-lg-10 col-sm-10 col-md-10">
<div class="row">
<div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
<div class="fun-odometer">
<h2>
<span class="odometer" data-count="45">00</span>
<span class="target">+</span>
</h2>
<p>Table Available</p>
</div>
</div>
<div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
<div class="fun-odometer">
<h2>
<span class="odometer" data-count="70">00</span>
<span class="target">+</span>
</h2>
<p>Breakfast Option</p>
 </div>
</div>
<div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
<div class="fun-odometer">
<h2>
<span class="odometer" data-count="130">00</span>
<span class="target">+</span>
</h2>
<p>Dinner Option</p>
</div>
</div>
<div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
<div class="fun-odometer">
<h2>
<span class="odometer" data-count="25">00</span>
<span class="target">+</span>
</h2>
<p>Year Of Experience</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="testimonials-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6">
<div class="single-testimonials-content">
<div class="section-title left-title">
<span class="top-title">Our Testimonials</span>
<h2>Our Client Feedback</h2>
</div>
<div class="testimonials-slider owl-carousel owl-theme">
<div class="testimonials-card">
<div class="testimonials-text">
<img src="assets/images/testimonials/testimonials-2.webp" alt="images">
<h3>Donatella Nobatti</h3>
<span>SEO -Founder</span>
<div class="testimonials-shape-1">
<img src="assets/images/testimonials/testimonials-shape.webp" alt="images">
</div>
</div>
<p>There are many variations of passages of Lorem ipsum available atims thajority have suffered alteration in some form by injected randomised words which don't look even sligh going to use a passage.</p>
</div>
<div class="testimonials-card">
<div class="testimonials-text">
<img src="assets/images/testimonials/testimonials-2.webp" alt="images">
<h3>Donatella Nobatti</h3>
<span>SEO -Founder</span>
<div class="testimonials-shape-1">
<img src="assets/images/testimonials/testimonials-shape.webp" alt="images">
</div>
</div>
<p>There are many variations of passages of Lorem ipsum available atims thajority have suffered alteration in some form by injected randomised words which don't look even sligh going to use a passage.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="testimonials-img">
<img src="assets/images/testimonials/testimonials-img-1.webp" alt="images">
<div class="testimonials-video">
<a href="https://www.youtube.com/watch?v=PtOOI_nKwtw" class="popup-youtube">
<img src="assets/images/video-play.svg" alt="images">
</a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="portfolio-area pt-100 pb-100 jarallax" data-jarallax='{"speed": 0.3}'>
<div class="container">
<div class="section-title">
<span class="top-title">Our Portfolio</span>
<h2>The Divine Feel Of Taste</h2>
</div>
<div class="portfolio-slider owl-carousel owl-theme">
<div class="single-portfolio-item">
<div class="portfolio-img">
<a href="portfolio-details.php">
<img src="assets/images/portfolio/Chalupa.png" alt="images">
</a>
</div>
<div class="portfolio-card">
<div class="portfolio-icon">
<a data-fancybox="gallery" href="assets/images/portfolio/Chalupa-1.png">
<i class='bx bx-plus'></i>
</a>
</div>
<span>Chalupa</span>    
<a href="portfolio-details.php"><h3>Chalupa</h3></a>
</div>
</div>
<div class="single-portfolio-item">
<div class="portfolio-img">
<a href="portfolio-details.php">
<img src="assets/images/portfolio/Chilaquiles.png" alt="images">
</a>
</div>
<div class="portfolio-card">
<div class="portfolio-icon">
<a data-fancybox="gallery" href="assets/images/portfolio/Chilaquiles-1.png">
<i class='bx bx-plus'></i>
</a>
</div>
<span>Chilaquiles</span>
<a href="portfolio-details.php"><h3>Chilaquiles</h3></a>
</div>
</div>
<div class="single-portfolio-item">
<div class="portfolio-img">
<a href="portfolio-details.php">
<img src="assets/images/portfolio/Fajitas.png" alt="images">
</a>
</div>
<div class="portfolio-card">
<div class="portfolio-icon">
<a data-fancybox="gallery" href="assets/images/portfolio/Fajitas-1.png">
<i class='bx bx-plus'></i>
</a>
</div>
<span>Fajitas</span>
<a href="portfolio-details.php"><h3>Fajitas</h3></a>
</div>
</div>
</div>
</div>
<div class="portfolio-shape">
<img src="assets/images/portfolio/portfolio-shape-1.webp" alt="images">
</div>
</div>


<div class="visit-us-today-area pt-100">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="visit-images">
<div class="visit-main-img" data-cue="bounceInLeft" data-duration="2000">
<img src="assets/images/reserve-today/reserve-img-1.webp" alt="images">
</div>
<div class="visit-shape-1">
<img src="assets/images/reserve-today/reserve-shape-1.webp" alt="images">
</div>
<div class="visit-shape-2">
<img src="assets/images/reserve-today/reserve-shape-3.webp" alt="images">
</div>
</div>
</div>
<div class="col-lg-6" data-cue="bounceInRight" data-duration="1500">
<div class="reserve-from">
<div class="section-title left-title">
<span class="top-title">Visit Us Today</span>
<h2>Make A Reserve</h2>
</div>
<form>
<div class="row">
<div class="col-lg-12 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-lg-12 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Phone">
</div>
</div>
<div class="col-lg-12 col-sm-6 col-md-6">
<div class="form-group">
<select class="form-select" aria-label="Default select example">
<option selected>Persons</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
</div>
<div class="col-lg-12 col-sm-6 col-md-6">
<div class="form-group">
<div class="input-group date" id="datetimepicker">
<input type="text" class="form-control" placeholder="mm/dd/yyyy">
<span class="input-group-addon"></span>
</div>
</div>
</div>
<div class="col-lg-12 col-sm-6 col-md-6">
<div class="form-group">
<select class="form-select" aria-label="Default select example">
<option selected>Time</option>
<option value="1">08:00 AM – 05:00 PM</option>
<option value="2">09:00 AM – 06:00 PM</option>
<option value="3">10:00 AM – 05:00 PM</option>
<option value="4">09:00 AM – 05:00 PM</option>
</select>
</div>
</div>
<div class="col-lg-12 col-sm-6 col-md-6">
<button type="submit" class="default-btn">Book A Table</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="visit-shape-3">
<img src="assets/images/reserve-today/reserve-shape-2.webp" alt="images">
</div>
<div class="visit-shape-4">
<img src="assets/images/reserve-today/reserve-shape-4.webp" alt="images">
</div>
<div class="visit-shape-5">
<img src="assets/images/reserve-today/reserve-shape-5.webp" alt="images">
</div>
</div>


<div class="restaurant-area pt-100 pb-100">
<div class="container">
<div class="section-title left-title">
<span class="top-title">Team of Restaurant</span>
<h2>Meet Our Professionals</h2>
<div class="menu-view-btn">
<a href="menu-details.php" class="default-btn">View All</a>
</div>
</div>
<div class="restaurant-slider owl-carousel owl-theme">
<div class="single-restaurant-card">
<div class="restaurant-img">
<img src="assets/images/restaurant/ban.png" alt="images">
<ul class="restaurant-list-icon">
<li>
<a href="https://www.instagram.com/" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
<li>
<a href="https://www.linkedin.com/" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="https://twitter.com/" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="https://www.facebook.com/" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
</ul>
</div>
<div class="restaurant-content">
<h3>Mary Christmas</h3>
<p>Assistente Chef</p>
</div>
</div>
<div class="single-restaurant-card">
<div class="restaurant-img">
<img src="assets/images/restaurant/ban.png" alt="images">
<ul class="restaurant-list-icon">
<li>
<a href="https://www.instagram.com/" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
<li>
<a href="https://www.linkedin.com/" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="https://twitter.com/" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="https://www.facebook.com/" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
</ul>
</div>
<div class="restaurant-content">
<h3>Ash Wednesday</h3>
<p>Chef</p>
</div>
</div>
<div class="single-restaurant-card">
<div class="restaurant-img">
<img src="assets/images/restaurant/ban.png" alt="images">
<ul class="restaurant-list-icon">
<li>
<a href="https://www.instagram.com/" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
<li>
<a href="https://www.linkedin.com/" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="https://twitter.com/" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="https://www.facebook.com/" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
</ul>
</div>
<div class="restaurant-content">
<h3>Sharon Needles</h3>
<p>Co - Founder</p>
</div>
</div>
<div class="single-restaurant-card">
<div class="restaurant-img">
<img src="assets/images/restaurant/ban.png" alt="images">
<ul class="restaurant-list-icon">
<li>
<a href="https://www.instagram.com/" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
<li>
<a href="https://www.linkedin.com/" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="https://twitter.com/" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="https://www.facebook.com/" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
</ul>
</div>
<div class="restaurant-content">
 <h3>Mary Christmas</h3>
<p>Assistente Chef</p>
</div>
</div>
<div class="single-restaurant-card">
<div class="restaurant-img">
<img src="assets/images/restaurant/ban.png" alt="images">
<ul class="restaurant-list-icon">
<li>
<a href="https://www.instagram.com/" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
<li>
<a href="https://www.linkedin.com/" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="https://twitter.com/" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="https://www.facebook.com/" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
</ul>
</div>
<div class="restaurant-content">
<h3>Ash Wednesday</h3>
<p>Chef</p>
</div>
</div>
<div class="single-restaurant-card">
<div class="restaurant-img">
<img src="assets/images/restaurant/ban.png" alt="images">
<ul class="restaurant-list-icon">
<li>
<a href="https://www.instagram.com/" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
<li>
<a href="https://www.linkedin.com/" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="https://twitter.com/" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="https://www.facebook.com/" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
</ul>
</div>
<div class="restaurant-content">
<h3>Sharon Needles</h3>
<p>Co - Founder</p>
</div>
</div>
</div>
</div>
<div class="restaurant-shape-1">
<img src="assets/images/restaurant/restaurant-img-shape-1.webp" alt="images">
</div>
<div class="restaurant-shape-2">
<img src="assets/images/restaurant/restaurant-img-shape-2.webp" alt="images">
</div>
</div>


<div class="location-area pt-100 pb-100 jarallax" data-jarallax='{"speed": 0.3}'> 
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6" data-cue="slideInLeft" data-duration="2000">
<div class="single-location-content">
<div class="section-title left-title">
<span class="top-title">Find Our Location</span>
<h2>Locations Of Our Restaurant All Over The World</h2>
<p>On the other hand, we denounce with righteous indignation and dislike men who are mantis
beguiled aitem demora lized by the charms of pleasure of the moment.</p>
</div>
<h3>Where Buy Our Restaurant</h3>
<div class="row">
<div class="col-lg-4 col-sm-4 col-md-4">
<div class="location-list">
<ul>
<li>
<i class='bx bx-check'></i>Dummy voluptatem
</li>
<li>
<i class='bx bx-check'></i>Accusantium
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-sm-4 col-md-4">
<div class="location-list">
<ul>
<li>
<i class='bx bx-check'></i>Typesetting
</li>
<li>
<i class='bx bx-check'></i>Popular belief
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-sm-4 col-md-4">
<div class="location-list">
<ul>
<li>
<i class='bx bx-check'></i>Established
</li>
<li>
<i class='bx bx-check'></i>Many variations
</li>
</ul>
</div>
</div>
</div>
<a href="about.php" class="default-btn">Read More</a>
</div>
</div>
<div class="col-lg-6" data-cue="zoomIn" data-duration="2000">
<div class="location-map">
<img src="assets/images/location-map-img.webp" alt="images">
<div class="location-text">
<span></span>
<p>Mexico</p>
</div>
<div class="location-text location-1">
<span></span>
<p>Peru</p>
</div>
<div class="location-text location-2">
<span></span>
<p>Ecuador</p>
</div>
<div class="location-text location-3">
<span></span>
<p>Chile</p>
</div>
<div class="location-text location-4">
<span></span>
<p>South Africa</p>
</div>
<div class="location-text location-5">
<span></span>
<p>United States</p>
</div>
<div class="location-text location-6">
<span></span>
<p>Libya</p>
</div>
</div>
</div>
</div>
</div>
</div>


<!-- <div class="blog-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<span class="top-title">Our Blog</span>
<h2>Latest Blog & News</h2>
</div>
<div class="row justify-content-center">
<div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
<div class="single-blog-card">
<div class="blog-img">
<a href="blog-details.php">
<img src="assets/images/blog/blog-1.webp" alt="images">
</a>
<div class="blog-time">
<span>17 September 2022</span>
</div>
</div>
<div class="single-blog-content">
<ul>
<li>By <a href="blog-details.php">Admin</a></li>
<li>Restaurant</li>
</ul>
<a href="blog-details.php">
<h3>Elegant Dessert 10Tips How To Make It At Home</h3>
</a>
<a href="blog-details.php" class="discover-more">Read More</a>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
<div class="single-blog-card">
<div class="blog-img">
<a href="blog-details.php">
<img src="assets/images/blog/blog-2.webp" alt="images">
</a>
<div class="blog-time">
<span>19 September 2022</span>
</div>
</div>
<div class="single-blog-content">
<ul>
<li>By <a href="blog-details.php">Admin</a></li>
<li>News & Tips</li>
</ul>
<a href="blog-details.php">
<h3>Turkish Soup With Species Dish Of The Week</h3>
</a>
<a href="blog-details.php" class="discover-more">Read More</a>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
<div class="single-blog-card">
<div class="blog-img">
<a href="blog-details.php">
<img src="assets/images/blog/blog-3.webp" alt="images">
</a>
 <div class="blog-time">
<span>22 September 2022</span>
</div>
</div>
<div class="single-blog-content">
<ul>
<li>By <a href="blog-details.php">Admin</a></li>
<li>Food & Drink</li>
</ul>
<a href="blog-details.php">
<h3>Ideal Cocktails From Our Barmen For Perfect Mood</h3>
</a>
<a href="blog-details.php" class="discover-more">Read More</a>
</div>
</div>
</div>
</div>
</div>
</div> -->

<?php include('includes/footer.php'); ?>