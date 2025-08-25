
</div>
<!-- End content wrapper -->

<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5><i class="bi bi-code-slash"></i> Adam Carr</h5>
                <p class="mb-3">Professional Software Developer specializing in web development and custom software solutions.</p>
                <div class="social-links">
                    <a href="https://github.com/realadamcarr" target="_blank" class="text-white me-3" title="GitHub">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/adam-carr-16aab0288?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="text-white me-3" title="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="mailto:adam@adamcarr.dev" class="text-white me-3" title="Email">
                        <i class="bi bi-envelope"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <h6>Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="<?= base_url('about') ?>" class="text-light text-decoration-none">About</a></li>
                    <li><a href="<?= base_url('projects') ?>" class="text-light text-decoration-none">Projects</a></li>
                    <li><a href="<?= base_url('freelancing') ?>" class="text-light text-decoration-none">Services</a></li>
                    <li><a href="<?= base_url('contact') ?>" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6>Contact Info</h6>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt"></i> Tipperary, Ireland</li>
                    <li><i class="bi bi-envelope"></i> adam@adamcarr.dev</li>
                </ul>
            </div>
        </div>
        <hr class="my-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0">&copy; <?= date('Y') ?> Adam Carr. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <small class="text-muted">Built with CodeIgniter 4</small>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>