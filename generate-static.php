<?php
/**
 * Static Site Generator for GitHub Pages Deployment
 * This script generates static HTML files from the CodeIgniter application
 */

// Base URL for GitHub Pages (will be updated during deployment)
$baseUrl = 'https://realadamcarr.github.io/adamcarr.dev/';

// Create the static output directory
$outputDir = __DIR__ . '/static-site';
if (!file_exists($outputDir)) {
    mkdir($outputDir, 0755, true);
}

// Routes to generate static files for
$routes = [
    '/' => 'index.html',
    '/about' => 'about.html', 
    '/projects' => 'projects.html',
    '/contact' => 'contact.html',
    '/freelancing' => 'freelancing.html',
    '/sitemap.xml' => 'sitemap.xml'
];

// Function to make HTTP request to local server and get content
function getPageContent($url) {
    $context = stream_context_create([
        'http' => [
            'timeout' => 30,
            'user_agent' => 'Static Site Generator'
        ]
    ]);
    
    $content = file_get_contents($url, false, $context);
    if ($content === false) {
        throw new Exception("Failed to fetch content from: $url");
    }
    
    return $content;
}

// Function to update URLs in content for GitHub Pages
function updateUrlsForGitHubPages($content, $baseUrl) {
    // Replace localhost URLs with GitHub Pages URL
    $patterns = [
        '/http:\/\/localhost\/adamcarr\.dev\/public\/index\.php\//',
        '/http:\/\/localhost\/adamcarr\.dev\/public\//',
        '/http:\/\/localhost:8081\/index\.php\//',
        '/http:\/\/localhost:8081\//'
    ];
    
    foreach ($patterns as $pattern) {
        $content = preg_replace($pattern, $baseUrl, $content);
    }
    
    // Fix relative URLs to be absolute for GitHub Pages
    $content = str_replace('href="about"', 'href="' . $baseUrl . 'about.html"', $content);
    $content = str_replace('href="projects"', 'href="' . $baseUrl . 'projects.html"', $content);
    $content = str_replace('href="contact"', 'href="' . $baseUrl . 'contact.html"', $content);
    $content = str_replace('href="freelancing"', 'href="' . $baseUrl . 'freelancing.html"', $content);
    $content = str_replace('href=""', 'href="' . $baseUrl . '"', $content);
    $content = str_replace('href="/"', 'href="' . $baseUrl . '"', $content);
    
    return $content;
}

echo "Starting static site generation...\n";

// Check if local server is running
$serverRunning = false;
$testUrls = ['http://localhost:8081', 'http://localhost:8080'];

foreach ($testUrls as $testUrl) {
    $headers = @get_headers($testUrl);
    if ($headers && strpos($headers[0], '200') !== false) {
        $serverUrl = $testUrl;
        $serverRunning = true;
        echo "Found running server at: $serverUrl\n";
        break;
    }
}

if (!$serverRunning) {
    echo "No running server found. Starting development server...\n";
    $serverProcess = proc_open(
        'php spark serve --port=8082 --host=localhost',
        [
            0 => ['pipe', 'r'],
            1 => ['pipe', 'w'], 
            2 => ['pipe', 'w']
        ],
        $pipes,
        __DIR__
    );
    
    if (!$serverProcess) {
        die("Failed to start development server\n");
    }
    
    // Wait for server to start
    sleep(3);
    $serverUrl = 'http://localhost:8082';
    echo "Started development server at: $serverUrl\n";
}

// Generate static files
foreach ($routes as $route => $filename) {
    echo "Generating $filename from route $route...\n";
    
    $url = $serverUrl . $route;
    try {
        $content = getPageContent($url);
        
        // Update URLs for GitHub Pages deployment
        if ($filename !== 'sitemap.xml') {
            $content = updateUrlsForGitHubPages($content, $baseUrl);
        } else {
            // Update sitemap URLs
            $content = str_replace('http://localhost/adamcarr.dev/public/', $baseUrl, $content);
            $content = str_replace('http://localhost:8081/', $baseUrl, $content);
            $content = str_replace('http://localhost:8082/', $baseUrl, $content);
        }
        
        $outputPath = $outputDir . '/' . $filename;
        if (file_put_contents($outputPath, $content) === false) {
            throw new Exception("Failed to write file: $outputPath");
        }
        
        echo "✓ Generated: $filename\n";
        
    } catch (Exception $e) {
        echo "✗ Error generating $filename: " . $e->getMessage() . "\n";
    }
}

// Copy static assets
echo "Copying static assets...\n";

$assetsDir = __DIR__ . '/public/assets';
$staticAssetsDir = $outputDir . '/assets';

if (file_exists($assetsDir)) {
    // Create assets directory
    if (!file_exists($staticAssetsDir)) {
        mkdir($staticAssetsDir, 0755, true);
    }
    
    // Copy recursively
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($assetsDir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );
    
    foreach ($iterator as $item) {
        $target = $staticAssetsDir . DIRECTORY_SEPARATOR . $iterator->getSubPathName();
        
        if ($item->isDir()) {
            if (!file_exists($target)) {
                mkdir($target, 0755, true);
            }
        } else {
            copy($item, $target);
        }
    }
    
    echo "✓ Copied assets directory\n";
} else {
    echo "! No assets directory found\n";
}

// Copy robots.txt
if (file_exists(__DIR__ . '/public/robots.txt')) {
    copy(__DIR__ . '/public/robots.txt', $outputDir . '/robots.txt');
    echo "✓ Copied robots.txt\n";
}

// Copy .htaccess for custom domains (optional)
if (file_exists(__DIR__ . '/public/.htaccess')) {
    copy(__DIR__ . '/public/.htaccess', $outputDir . '/.htaccess');
    echo "✓ Copied .htaccess\n";
}

// Cleanup server process if we started it
if (isset($serverProcess) && is_resource($serverProcess)) {
    proc_terminate($serverProcess);
    proc_close($serverProcess);
    echo "✓ Stopped development server\n";
}

echo "\nStatic site generation completed!\n";
echo "Output directory: $outputDir\n";
echo "Files generated:\n";

$files = scandir($outputDir);
foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        echo "  - $file\n";
    }
}