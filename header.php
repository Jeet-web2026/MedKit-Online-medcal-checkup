<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (is_front_page() || is_home()) {
            bloginfo('name');
            echo ' - ';
            bloginfo('description');
        } else {
            wp_title('', true, 'right');
        }
        ?>
    </title>
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/images/logo.png') ?>" type="image/x-icon">
    <?php wp_head() ?>
</head>

<body>
    <header class="px-5 bg-light shadow fixed-top">
        <!-- top-nav -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold fs-2" href=""><img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" alt="logo-img" class="logo-img">Medkit</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item me-4">
                            <div class="d-flex">
                                <div class="me-2">
                                    <i class="fa-regular fa-building shadow p-2 fs-3 text-primary rounded"></i>
                                </div>
                                <div>
                                    <p class="text-capitalize">Ramdashatti</p>
                                    <p class="text-capitalize font-500 text-primary">Garden Reach, Kolkata: 700024</p>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item me-4">
                            <div class="d-flex">
                                <div class="me-2">
                                    <i class="fa-solid fa-phone shadow p-2 fs-3 text-primary rounded"></i>
                                </div>
                                <div>
                                    <p class="text-capitalize">call us:</p>
                                    <a href="tel:+91 9163715179" class="text-capitalize font-500 text-primary">+91 9163715179</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="btn btn-primary px-4 py-2 font-500 text-light text-capitalize">book appointment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- top-nav -->
        <!-- main nav -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-capitalize me-2 font-500 text-black" href="<?php site_url('/') ?>">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize me-2 font-500 text-black" href="javascript:void(0)">about us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize me-2 font-500 text-black" href="javascript:void(0)">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize me-2 font-500 text-black" href="javascript:void(0)">our doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize me-2 font-500 text-black" href="javascript:void(0)">appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize me-2 font-500 text-black" href="javascript:void(0)">pages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize font-500 text-black" href="javascript:void(0)">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- main nav -->
    </header>