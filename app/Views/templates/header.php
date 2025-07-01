<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Adam Carr - software developer</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/acfavicon.png">
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
                <li class="nav-item"><a class="nav-link" href="<?= base_url('welcome_message') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('projects') ?>">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('freelancing') ?>">Freelancing</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>