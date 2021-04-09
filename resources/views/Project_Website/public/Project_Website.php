<?php

require_once '../src/setup.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'Margins/Header.php'; ?>
    <title>Log in</title>
</head>
<br>
<body class="p-4">
<div class="container">
    <?php include 'Nav_Bar/Nav-Bar.php'; ?>

<main role="main" class="container">
    <div class="jumbotron">
        <h1>Payment Processing Example</h1>
        <p class="lead" id="card-paragraph">Curabitur ullamcorper orci nec sem congue viverra. Sed porta dolor ac velit varius, in gravida sapien bibendum.</p>
    <a class="btn btn-dark" href="Our_Work.php" role="button">View Our Work</a>
    </div>

<!-- Carousel Script Below -->
    <div></div>
    <div class="h-15 d-inline-block" style="width: 20px;"></div>


    <div class="row justify-content-start">
        <div class="col";>

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox" style=" width:100%; height: 320px !important;">
                <div class="carousel-item active" data-interval="100000">
                    <img src="../images/happy-picture-2.jpg" class="d-block w-100" alt="image1">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="../images/happy-picture.jpg" class="d-block w-100" alt="image2">
                </div>
                <div class="carousel-item">
                    <img src="../images/happy-woman-2.jpg" class="d-block w-100" alt="image3">
                </div>
                <div class="carousel-item">
                    <img src="../images/happy-woman.jpg" class="d-block w-100" alt="image4">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Text that is next to the carousel on the right -->

    <div class="col">
        <h1></h1>
        <p class="main-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>In est magna, gravida quis sagittis eget, euismod ac erat. Sed vel auctor augue. Suspendisse et facilisis lorem. Quisque pharetra elementum metus, eget consectetur est interdum eget. Nunc ac dignissim massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nisi eros, dapibus sit amet pretium a, porta nec ex. Ut accumsan non lectus sed scelerisque. Vivamus fringilla elit non facilisis aliquam. Vestibulum finibus dolor leo, nec euismod mi pharetra non.</p>
    </div>

<?php
require_once '../src/Scripts.php';
require_once 'Margins/Footer.php';
?>

