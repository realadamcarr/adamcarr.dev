<?php
$birthday = new DateTime('2003-07-05'); 
$now = new DateTime();
$age = $now->diff($birthday)->y;
?>

<header class="container text-center my-4">
    <h1>Adam Carr</h1>
</header>

<main class="container">
    <div class="centered-content">
        <h2>Welcome! My name is Adam Carr, I am a <?= $age ?> year old software developer from Tipperary.</h2>
        <p>Welcome to my website! Here, you can find information about me, my projects, what I offer for freelancing and how to get in touch.</p>
    </div>

    <div class="row justify-content-center g-4">
        <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
            <a href="<?= base_url('about') ?>" class="btn btn-custom w-100">Learn More About Me</a>
        </div>
        <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
            <a href="<?= base_url('projects') ?>" class="btn btn-custom w-100">View My Projects</a>
        </div>
        <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
            <a href="<?= base_url('freelancing') ?>" class="btn btn-custom w-100">What I Offer for Freelancing</a>
        </div>
        <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
            <a href="<?= base_url('contact') ?>" class="btn btn-custom w-100">Contact Me</a>
        </div>
    </div>
</main>
