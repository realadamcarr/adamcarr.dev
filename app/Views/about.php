<?php
helper('url');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Adam Carr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">Adam Carr</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url('about') ?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('projects') ?>">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('freelancing') ?>">Freelancing</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="container mt-5">
    <!-- Page content goes here -->
    <h1>About Me</h1>
    <p>This is the about page.</p>
</main>

<footer class="container text-center mt-5 mb-3">
    <hr>
    <p>&copy; <?= date('Y') ?> Adam Carr. All rights reserved.</p>
</footer>

<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>