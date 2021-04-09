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
<h1>Find everything you need for your audio post workflow</h1>
<p class="lead" id="card-paragraph">SafeWaves is a comprehensive online resource centre for the audio post production community</p>
<a class="btn btn-dark" href="Sample-Libraries.php" role="button">View Sample Libraries</a>
</div>

<!-- Carousel Script Below -->
<div></div>
<div class="h-15 d-inline-block" style="width: 20px;"></div>


<div class="row justify-content-start">
    <div class="col";>

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox" style=" width:100%; height: 320px !important;">
                <div class="carousel-item active" data-interval="100000">
                    <img src="../images/MAFX17-cover-B-1024x1024.jpg" class="d-block w-100" alt="image1">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="../images/MAFX16-cover-1024x1024.jpg" class="d-block w-100" alt="image2">
                </div>
                <div class="carousel-item">
                    <img src="../images/MAFX010-AWW-cover-1024x1024.jpg" class="d-block w-100" alt="image3">
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
            Access over 30,000 royalty free music tracks to use in videos, streaming, podcast, social media and for commercial use</p>

        <p>A subscription with unlimited downloads and no copyright strikes! 30 days free trial. Royalty free samples for all digital platforms, YouTube video, Twitch streaming, podcasts, you name it.</p>

        <p>Search for samples based on location and length. Our libraries have something for every need, and we’re adding new samples every week!</p>

    </div>








<?php
require_once '../src/Scripts.php';
require_once 'Margins/Footer.php';
?>

