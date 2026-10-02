<?php
$base_url = "https://onemorecleaner.com/";
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
    <meta name="reply-to" content="jimmy@onemorecleaner.com">
    <meta name="url" content="https://www.onemorecleaner.com">
    <meta name="identifier-URL" content="https://www.onemorecleaner.com">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="revisit-after" content="28 days">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url; ?>media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url; ?>media/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $base_url; ?>media/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $base_url; ?>media/favicon/safari-pinned-tab.svg" color="#ef6e43">
    <link rel="shortcut icon" href="<?php echo $base_url; ?>media/favicon/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="ONEMORECLEANER">
    <meta name="application-name" content="ONEMORECLEANER">
    <meta name="msapplication-TileColor" content="#ef6e43">
    <meta name="msapplication-config" content="<?php echo $base_url; ?>media/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ef6e43">

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
