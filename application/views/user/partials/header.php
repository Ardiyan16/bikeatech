<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Bingo One page parallax responsive HTML Template ">

    <meta name="author" content="Themefisher.com">

    <title><?= $title ?></title>

    <!-- Mobile Specific Meta
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/users/images/logobikea.png" />

    <!-- CSS
  ================================================== -->
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/users/plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/users/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/users/plugins/lightbox2/dist/css/lightbox.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/users/plugins/animate/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/users/plugins/slick/slick.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/users/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="<?= base_url() ?>assets/admin/js/sweetalert2-all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<body id="body">

    <!--
  Start Preloader
  ==================================== -->
    <div id="preloader">
        <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--
  End Preloader
  ==================================== -->




    <!--
Fixed Navigation
==================================== -->
    <header class="navigation fixed-top">
        <div class="container">
            <!-- main nav -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- logo -->
                <a class="navbar-brand logo" href="index.html">
                    <img class="logo-default" src="<?= base_url() ?>assets/users/images/bikeaa.png" width="200" height="75" alt="logo" />
                    <img class="logo-white" src="<?= base_url() ?>assets/users/images/bikeaa.png" width="200" height="75" alt="logo" />
                </a>
                <!-- /logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Users') ?>">
                                Home
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url('Users/about') ?>">About Us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url('Users/service') ?>">Services</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url('Users/portfolio') ?>">Portfolio</a>
                        </li>
                        <!-- <li class="nav-item ">
                            <a class="nav-link" href="team.html">Team</a>
                        </li> -->
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url('Users/blog') ?>">Blog</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url('Users/contact') ?>">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>