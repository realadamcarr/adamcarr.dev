<?php
$birthday = new DateTime('2003-07-05'); 
$now = new DateTime();
$age = $now->diff($birthday)->y;
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Adam Carr</h1>
            <p class="lead">Professional Software Developer from Tipperary, Ireland</p>
            <p class="mb-4">Passionate <span class="age-highlight"><?= $age ?></span> year old developer specializing in web development and custom software solutions</p>
            <div class="hero-buttons">
                <a href="<?= base_url('projects') ?>" class="btn btn-primary btn-lg me-3">
                    <i class="bi bi-folder"></i> View My Work
                </a>
                <a href="<?= base_url('contact') ?>" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-envelope"></i> Get In Touch
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>What I Do</h2>
            <p>I create modern, efficient, and scalable software solutions tailored to your needs</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <i class="bi bi-code-square"></i>
                    <h4>Web Development</h4>
                    <p>Full-stack web applications using modern frameworks and technologies</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <i class="bi bi-gear"></i>
                    <h4>Custom Software</h4>
                    <p>Tailored solutions designed specifically for your business requirements</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <i class="bi bi-cloud"></i>
                    <h4>API Development</h4>
                    <p>RESTful APIs and integrations for seamless data exchange</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <i class="bi bi-database"></i>
                    <h4>Database Design</h4>
                    <p>Optimized database structures for performance and scalability</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Navigation -->
<section class="section section-alt">
    <div class="container">
        <div class="section-title">
            <h2>Explore More</h2>
            <p>Learn more about my background, view my projects, or get in touch</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-person-circle text-primary display-4 mb-3"></i>
                        <h5 class="card-title">About Me</h5>
                        <p class="card-text">Learn about my background, skills, and passion for software development</p>
                        <a href="<?= base_url('about') ?>" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-folder-fill text-primary display-4 mb-3"></i>
                        <h5 class="card-title">My Projects</h5>
                        <p class="card-text">Explore my portfolio of web applications and software solutions</p>
                        <a href="<?= base_url('projects') ?>" class="btn btn-primary">View Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-briefcase-fill text-primary display-4 mb-3"></i>
                        <h5 class="card-title">Freelance Services</h5>
                        <p class="card-text">Discover the professional services I offer for your business</p>
                        <a href="<?= base_url('freelancing') ?>" class="btn btn-primary">View Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
