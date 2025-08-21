<?php
$birthday = new DateTime('2003-07-05'); 
$now = new DateTime();
$age = $now->diff($birthday)->y;
?>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold text-primary-custom mb-4">About Me</h1>
                <p class="lead">I'm Adam Carr, a passionate <span class="age-highlight"><?= $age ?></span>-year-old software developer from Tipperary, Ireland.</p>
                <p>With a deep love for technology and problem-solving, I specialize in creating modern, efficient web applications and custom software solutions. My journey in software development began with curiosity and has evolved into a professional career focused on delivering high-quality, scalable solutions.</p>
                <p>I enjoy working with the latest technologies and frameworks, always staying up-to-date with industry trends and best practices. Whether it's building a complex web application or solving a unique technical challenge, I approach every project with enthusiasm and attention to detail.</p>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-person-circle display-1 text-primary mb-3"></i>
                        <h4>Quick Facts</h4>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i> Based in Tipperary, Ireland</li>
                            <li class="mb-2"><i class="bi bi-calendar text-primary me-2"></i> <?= $age ?> years old</li>
                            <li class="mb-2"><i class="bi bi-code-slash text-primary me-2"></i> Full-stack Developer</li>
                            <li class="mb-2"><i class="bi bi-heart text-primary me-2"></i> Passionate about clean code</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-title">
            <h2>Skills & Technologies</h2>
            <p>The tools and technologies I work with to bring ideas to life</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="skill-item">
                    <i class="bi bi-filetype-php"></i>
                    <h4>PHP</h4>
                    <p>Modern PHP development with frameworks like CodeIgniter and Laravel</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="skill-item">
                    <i class="bi bi-filetype-js"></i>
                    <h4>JavaScript</h4>
                    <p>ES6+, DOM manipulation, and modern JavaScript frameworks</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="skill-item">
                    <i class="bi bi-database"></i>
                    <h4>Database</h4>
                    <p>MySQL, PostgreSQL, and database design optimization</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="skill-item">
                    <i class="bi bi-bootstrap"></i>
                    <h4>Frontend</h4>
                    <p>HTML5, CSS3, Bootstrap, and responsive web design</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="skill-item">
                    <i class="bi bi-git"></i>
                    <h4>Version Control</h4>
                    <p>Git, GitHub, and collaborative development workflows</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="skill-item">
                    <i class="bi bi-cloud"></i>
                    <h4>APIs</h4>
                    <p>RESTful API development and third-party integrations</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="skill-item">
                    <i class="bi bi-shield-check"></i>
                    <h4>Security</h4>
                    <p>Secure coding practices and data protection</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="skill-item">
                    <i class="bi bi-speedometer2"></i>
                    <h4>Performance</h4>
                    <p>Code optimization and performance tuning</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-4">Let's Work Together</h2>
                <p class="lead mb-4">I'm always interested in new opportunities and exciting projects. Whether you have a specific project in mind or just want to connect, I'd love to hear from you.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="<?= base_url('projects') ?>" class="btn btn-primary">
                        <i class="bi bi-folder"></i> View My Projects
                    </a>
                    <a href="<?= base_url('freelancing') ?>" class="btn btn-outline-primary">
                        <i class="bi bi-briefcase"></i> My Services
                    </a>
                    <a href="<?= base_url('contact') ?>" class="btn btn-outline-primary">
                        <i class="bi bi-envelope"></i> Contact Me
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>