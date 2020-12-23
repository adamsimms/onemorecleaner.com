<?php
$base_url = "http://onemorecleaner.com/demo/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $meta_page_title; ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>" />
    <meta name="description" content="<?php echo $meta_description; ?>" />
    <meta name="copyright" content="ONE MORE CLEANER">
    <meta name="language" content="EN">
    <meta name="robots" content="index,follow" />
    <meta name="revised" content="Monday, Decemember 14th, 2020, 8:00 am" />
    <meta name="Classification" content="Business">
    <meta name="author" content="ONE MORE CLEANER, info@onemorecleaner.com">
    <meta name="designer" content="Adam Simms, hello@adamsim.ms">
    <meta name="reply-to" content="info@onemorecleaner.com">
    <meta name="url" content="http://www.onemorecleaner.com">
    <meta name="identifier-URL" content="http://www.onemorecleaner.com">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="revisit-after" content="28 days">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>media/sass/main.css">
</head>

<body>
    <div class="main-wrapper">
        <!--header-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger-inner"></div>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item <?php echo ($nav_active == 'house') ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $base_url ?>house-cleaning-services-montreal/"><img src="<?php echo $base_url; ?>media/images/illustration (1).png" alt="illustration" class="img-fluid">
                                House</a>
                        </li>
                        <li class="nav-item <?php echo ($nav_active == 'office') ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $base_url ?>office-cleaning-montreal/"> <img src="<?php echo $base_url; ?>media/images/illustration (2).png" alt="illustration" class="img-fluid">
                                Office</a>
                        </li>
                        <li class="nav-item <?php echo ($nav_active == 'steam') ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $base_url ?>deep-steam-cleaning-services-montreal/"> <img src="<?php echo $base_url; ?>media/images/illustration (3).png" alt="illustration" class="img-fluid">
                                Steam</a>
                        </li>
                    </ul>
                </div>
                <a class="navbar-brand" href="<?php echo $base_url ?>">one more clea<i></i>er</a>
                <div class="contact">
                    <a href="tel:514-222-0835"><i class="icon-telephone"></i>
                        <p>514-222-0835</p>
                    </a>
                </div>
            </div>

        </nav>