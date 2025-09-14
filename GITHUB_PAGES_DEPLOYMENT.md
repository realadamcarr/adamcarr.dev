# Deploying Adam Carr Portfolio to GitHub Pages

This repository contains a CodeIgniter 4 portfolio website that can be deployed to GitHub Pages using static site generation.

## How it works

1. **Dynamic Content**: The CodeIgniter 4 application generates dynamic content from PHP templates
2. **Static Generation**: The `generate-static.php` script converts all dynamic pages to static HTML files
3. **GitHub Actions**: Automatically builds and deploys the static site when changes are pushed to the master branch

## Deployment Process

### Automatic Deployment (Recommended)

1. **Push to master branch** - This automatically triggers the GitHub Actions workflow
2. **Wait for build** - The workflow will:
   - Set up PHP 8.2 environment
   - Install Composer dependencies  
   - Start the CodeIgniter development server
   - Generate static HTML files from all pages
   - Deploy to GitHub Pages

Your site will be available at: `https://realadamcarr.github.io/adamcarr.dev/`

### Manual Deployment

If you want to generate static files locally:

1. **Start the development server**:
   ```bash
   php spark serve --port=8081
   ```

2. **Run the static site generator**:
   ```bash
   php generate-static.php
   ```

3. **Files generated in `static-site/` directory**:
   - `index.html` (home page)
   - `about.html`
   - `projects.html` 
   - `contact.html`
   - `freelancing.html`
   - `sitemap.xml`
   - `assets/` (CSS, JS, images)
   - `robots.txt`

## GitHub Pages Configuration

1. Go to your repository **Settings**
2. Navigate to **Pages** in the sidebar
3. Under **Source**, select **GitHub Actions**
4. The workflow will automatically deploy on the next push to master

## Pages Generated

The static site generator creates HTML files for all routes:

- **/** → `index.html` (Home page)
- **/about** → `about.html` (About page)
- **/projects** → `projects.html` (Portfolio)
- **/contact** → `contact.html` (Contact form)
- **/freelancing** → `freelancing.html` (Services)
- **/sitemap.xml** → `sitemap.xml` (SEO sitemap)

## Features Preserved

✅ **Responsive Design** - All Bootstrap 5 styling preserved  
✅ **SEO Optimization** - Meta tags, structured data, sitemap  
✅ **Performance** - CDN assets, compressed files  
✅ **Professional Design** - Complete visual design maintained  
✅ **Navigation** - All internal links work correctly  

## Notes

- **Static Contact Form**: The contact form will need a backend service (like Formspree, Netlify Forms, etc.) since GitHub Pages doesn't support PHP processing
- **URLs Updated**: All URLs are automatically updated to point to the GitHub Pages domain
- **Assets**: CSS, JavaScript, and images are copied to the static build
- **No Server-side Processing**: Dynamic PHP features are converted to static HTML

## Troubleshooting

**Build fails?**
- Check that all Composer dependencies are properly configured
- Ensure PHP 8.2+ compatibility

**Pages not updating?**
- Check the Actions tab for build status
- Verify the workflow completed successfully
- GitHub Pages may take a few minutes to update

**Links broken?**
- Verify the `generate-static.php` script is updating URLs correctly
- Check that all pages are being generated

This setup provides a professional portfolio website deployed to GitHub Pages with zero hosting costs!