<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="error-content">
                    <h1 class="display-1 text-primary-custom">404</h1>
                    <h2 class="mb-4">Page Not Found</h2>
                    <p class="lead mb-4">Sorry, the page you are looking for doesn't exist or has been moved.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="<?= base_url() ?>" class="btn btn-primary">
                            <i class="bi bi-house"></i> Go Home
                        </a>
                        <a href="<?= base_url('contact') ?>" class="btn btn-outline-primary">
                            <i class="bi bi-envelope"></i> Contact Me
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h3 class="mb-4">What you can do:</h3>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <i class="bi bi-house-fill text-primary display-4 mb-3"></i>
                                <h5>Go Home</h5>
                                <p class="card-text">Return to the homepage and start fresh</p>
                                <a href="<?= base_url() ?>" class="btn btn-outline-primary">Home</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <i class="bi bi-folder-fill text-primary display-4 mb-3"></i>
                                <h5>View Projects</h5>
                                <p class="card-text">Check out my portfolio of work</p>
                                <a href="<?= base_url('projects') ?>" class="btn btn-outline-primary">Projects</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <i class="bi bi-envelope-fill text-primary display-4 mb-3"></i>
                                <h5>Contact Me</h5>
                                <p class="card-text">Get in touch if you need help</p>
                                <a href="<?= base_url('contact') ?>" class="btn btn-outline-primary">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
