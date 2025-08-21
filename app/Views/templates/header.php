<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? $title . ' - Adam Carr' : 'Adam Carr - Software Developer' ?></title>
    <meta name="description" content="<?= isset($description) ? $description : 'Adam Carr - Professional Software Developer specializing in web development and software solutions' ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Adam Carr">
    <meta name="keywords" content="Adam Carr, Software Developer, Web Development, PHP, CodeIgniter, JavaScript, Tipperary, Ireland">
    <meta property="og:title" content="<?= isset($title) ? $title . ' - Adam Carr' : 'Adam Carr - Software Developer' ?>">
    <meta property="og:description" content="<?= isset($description) ? $description : 'Professional Software Developer' ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/favicon/acfavicon.png') ?>">
    <link rel="canonical" href="<?= current_url() ?>">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Adam Carr",
        "jobTitle": "Software Developer",
        "url": "<?= base_url() ?>",
        "sameAs": [
            "https://github.com/realadamcarr",
            "https://linkedin.com/in/adamcarr"
        ],
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Tipperary",
            "addressCountry": "Ireland"
        },
        "email": "adam@adamcarr.dev",
        "knowsAbout": ["Web Development", "PHP", "JavaScript", "CodeIgniter", "Software Development"],
        "alumniOf": {
            "@type": "Organization",
            "name": "Self-taught Developer"
        }
    }
    </script>
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>">
            <i class="bi bi-code-slash"></i> Adam Carr
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= (isset($active_page) && $active_page == 'home') ? 'active' : '' ?>" href="<?= base_url('welcome_message') ?>">
                        <i class="bi bi-house"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (isset($active_page) && $active_page == 'about') ? 'active' : '' ?>" href="<?= base_url('about') ?>">
                        <i class="bi bi-person"></i> About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (isset($active_page) && $active_page == 'projects') ? 'active' : '' ?>" href="<?= base_url('projects') ?>">
                        <i class="bi bi-folder"></i> Projects
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (isset($active_page) && $active_page == 'freelancing') ? 'active' : '' ?>" href="<?= base_url('freelancing') ?>">
                        <i class="bi bi-briefcase"></i> Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (isset($active_page) && $active_page == 'contact') ? 'active' : '' ?>" href="<?= base_url('contact') ?>">
                        <i class="bi bi-envelope"></i> Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content wrapper to account for fixed navbar -->
<div class="content-wrapper">