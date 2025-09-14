<?php
/**
 * Static Site Generator for GitHub Pages
 * 
 * This script generates static HTML files from the CodeIgniter 4 application
 * for deployment to GitHub Pages or other static hosting services.
 */

// Define the pages to generate
$pages = [
    'index' => ['url' => '/', 'path' => 'index.html'],
    'about' => ['url' => '/about', 'path' => 'about/index.html'],
    'projects' => ['url' => '/projects', 'path' => 'projects/index.html'],
    'contact' => ['url' => '/contact', 'path' => 'contact/index.html'],
    'freelancing' => ['url' => '/freelancing', 'path' => 'freelancing/index.html'],
    'sitemap' => ['url' => '/sitemap.xml', 'path' => 'sitemap.xml']
];

// Create dist directory if it doesn't exist
$distDir = __DIR__ . '/dist';
if (!is_dir($distDir)) {
    mkdir($distDir, 0755, true);
}

echo "Starting static site generation...\n";
echo "This method generates static files by directly including PHP views.\n";

// Set up minimal CodeIgniter environment
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['REQUEST_URI'] = '/';
$_SERVER['SERVER_NAME'] = 'localhost';

// Include path for CodeIgniter functions we need
function base_url($uri = '') {
    return '/' . ltrim($uri, '/');
}

function current_url() {
    return '/';
}

foreach ($pages as $page => $config) {
    echo "Generating {$page}...\n";
    
    // Create directory if needed
    $filePath = $distDir . '/' . $config['path'];
    $fileDir = dirname($filePath);
    
    if (!is_dir($fileDir)) {
        mkdir($fileDir, 0755, true);
    }
    
    try {
        // Generate content by including the view files directly
        $content = generatePageContent($page);
        
        // Process the content to make it work for static hosting
        if ($page !== 'sitemap') {
            $content = processStaticContent($content);
        }
        
        // Write file
        file_put_contents($filePath, $content);
        echo "✓ Generated {$config['path']}\n";
        
    } catch (Exception $e) {
        echo "✗ Error generating {$page}: " . $e->getMessage() . "\n";
    }
}

// Copy assets
echo "Copying assets...\n";
copyDirectory(__DIR__ . '/public/assets', $distDir . '/assets');
echo "✓ Assets copied\n";

// Create .nojekyll file for GitHub Pages
file_put_contents($distDir . '/.nojekyll', '');
echo "✓ Created .nojekyll file\n";

echo "Static site generation complete!\n";
echo "Files generated in: {$distDir}\n";

/**
 * Generate page content by directly including PHP views
 */
function generatePageContent($page) {
    ob_start();
    
    switch ($page) {
        case 'index':
            $data = [
                'title' => 'Home',
                'description' => 'Adam Carr - Professional Software Developer',
                'active_page' => 'home'
            ];
            include __DIR__ . '/app/Views/templates/header.php';
            include __DIR__ . '/app/Views/welcome_message.php';
            include __DIR__ . '/app/Views/templates/footer.php';
            break;
            
        case 'about':
            $data = [
                'title' => 'About',
                'description' => 'Learn more about Adam Carr - Professional Software Developer',
                'active_page' => 'about'
            ];
            include __DIR__ . '/app/Views/templates/header.php';
            include __DIR__ . '/app/Views/about.php';
            include __DIR__ . '/app/Views/templates/footer.php';
            break;
            
        case 'projects':
            $data = [
                'title' => 'Projects',
                'description' => 'View projects by Adam Carr - Professional Software Developer',
                'active_page' => 'projects'
            ];
            include __DIR__ . '/app/Views/templates/header.php';
            include __DIR__ . '/app/Views/projects.php';
            include __DIR__ . '/app/Views/templates/footer.php';
            break;
            
        case 'contact':
            $data = [
                'title' => 'Contact',
                'description' => 'Get in touch with Adam Carr - Professional Software Developer',
                'active_page' => 'contact'
            ];
            include __DIR__ . '/app/Views/templates/header.php';
            include __DIR__ . '/app/Views/contact.php';
            include __DIR__ . '/app/Views/templates/footer.php';
            break;
            
        case 'freelancing':
            $data = [
                'title' => 'Freelancing',
                'description' => 'Freelancing services by Adam Carr - Professional Software Developer',
                'active_page' => 'freelancing'
            ];
            include __DIR__ . '/app/Views/templates/header.php';
            include __DIR__ . '/app/Views/freelancing.php';
            include __DIR__ . '/app/Views/templates/footer.php';
            break;
            
        case 'sitemap':
            return generateSitemap();
    }
    
    $content = ob_get_clean();
    return $content;
}

/**
 * Generate sitemap XML
 */
function generateSitemap() {
    $urls = [
        ['loc' => '/', 'lastmod' => date('Y-m-d'), 'priority' => '1.0'],
        ['loc' => '/about/', 'lastmod' => date('Y-m-d'), 'priority' => '0.8'],
        ['loc' => '/projects/', 'lastmod' => date('Y-m-d'), 'priority' => '0.9'],
        ['loc' => '/freelancing/', 'lastmod' => date('Y-m-d'), 'priority' => '0.8'],
        ['loc' => '/contact/', 'lastmod' => date('Y-m-d'), 'priority' => '0.7']
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    
    foreach ($urls as $url) {
        $xml .= '  <url>' . "\n";
        $xml .= '    <loc>https://realadamcarr.github.io/adamcarr.dev' . $url['loc'] . '</loc>' . "\n";
        $xml .= '    <lastmod>' . $url['lastmod'] . '</lastmod>' . "\n";
        $xml .= '    <priority>' . $url['priority'] . '</priority>' . "\n";
        $xml .= '  </url>' . "\n";
    }
    
    $xml .= '</urlset>';
    return $xml;
}

// Copy assets
echo "Copying assets...\n";
copyDirectory(__DIR__ . '/public/assets', $distDir . '/assets');
echo "✓ Assets copied\n";

// Create .nojekyll file for GitHub Pages
file_put_contents($distDir . '/.nojekyll', '');
echo "✓ Created .nojekyll file\n";

echo "Static site generation complete!\n";
echo "Files generated in: {$distDir}\n";

/**
 * Process HTML content for static hosting
 */
function processStaticContent($content) {
    // Fix navigation links for static site structure
    $content = str_replace('href="/"', 'href="/"', $content);
    $content = str_replace('href="/about"', 'href="/about/"', $content);
    $content = str_replace('href="/projects"', 'href="/projects/"', $content);
    $content = str_replace('href="/contact"', 'href="/contact/"', $content);
    $content = str_replace('href="/freelancing"', 'href="/freelancing/"', $content);
    
    // Fix asset paths - make them relative from root
    $content = str_replace('/assets/', './assets/', $content);
    
    // Fix any remaining CodeIgniter base_url calls
    $content = preg_replace('/href="[^"]*base_url\([\'"]([^\'"]*)[\'"][^"]*"/', 'href="/$1"', $content);
    
    return $content;
}

/**
 * Copy directory recursively
 */
function copyDirectory($src, $dest) {
    if (!is_dir($src)) return;
    
    if (!is_dir($dest)) {
        mkdir($dest, 0755, true);
    }
    
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($src, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );
    
    foreach ($iterator as $item) {
        $destPath = $dest . DIRECTORY_SEPARATOR . $iterator->getSubPathName();
        
        if ($item->isDir()) {
            if (!is_dir($destPath)) {
                mkdir($destPath, 0755, true);
            }
        } else {
            copy($item, $destPath);
        }
    }
}