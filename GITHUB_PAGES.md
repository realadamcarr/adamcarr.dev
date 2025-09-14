# 📄 GitHub Pages Deployment Guide

This guide explains how to deploy the Adam Carr portfolio website to GitHub Pages as a static site.

## 🎯 Overview

Since GitHub Pages only supports static HTML/CSS/JavaScript and not server-side PHP, this repository includes a **static site generator** that converts the CodeIgniter 4 PHP application into static HTML files suitable for GitHub Pages deployment.

## 🚀 Automatic Deployment (Recommended)

The repository is configured for **automatic deployment** using GitHub Actions:

### Setup Steps:

1. **Enable GitHub Pages**:
   - Go to your repository → Settings → Pages
   - Under "Source", select "GitHub Actions"
   - Save the settings

2. **Automatic Build & Deploy**:
   - Every push to the `master` branch automatically triggers the build
   - The GitHub Action runs `build-static.php` to generate static files
   - Static files are deployed to GitHub Pages
   - Your site will be available at: `https://yourusername.github.io/repository-name`

### GitHub Action Workflow:
- **File**: `.github/workflows/static.yml`
- **Triggers**: Push to master branch or manual workflow dispatch
- **Process**: 
  1. Checks out the code
  2. Sets up PHP 8.3
  3. Runs the static site generator
  4. Uploads generated files to GitHub Pages
  5. Deploys to your GitHub Pages site

## 🔧 Manual Deployment

If you prefer manual control or need to test locally:

### Prerequisites:
- PHP 8.1+ installed locally
- Access to your repository

### Steps:

1. **Generate Static Files**:
   ```bash
   # In the repository root
   php build-static.php
   ```
   This creates a `dist/` directory with static HTML files.

2. **Deploy to GitHub Pages**:
   - Enable GitHub Pages in repository settings
   - Upload the contents of the `dist/` folder to your GitHub Pages branch
   - Or use the GitHub Actions workflow by pushing to master

## 📁 Generated Static Structure

The static site generator creates:

```
dist/
├── index.html              # Home page
├── about/
│   └── index.html          # About page  
├── projects/
│   └── index.html          # Projects page
├── contact/
│   └── index.html          # Contact page
├── freelancing/
│   └── index.html          # Freelancing page
├── assets/                 # CSS, JS, images
│   ├── css/
│   ├── js/
│   └── images/
├── sitemap.xml             # SEO sitemap
└── .nojekyll              # Disables Jekyll processing
```

## 🔄 How the Static Generator Works

The `build-static.php` script:

1. **Includes PHP Views**: Directly includes the CodeIgniter view files
2. **Processes Content**: Converts dynamic PHP to static HTML
3. **Fixes Links**: Updates navigation links for static site structure
4. **Copies Assets**: Transfers CSS, JS, and image files
5. **Generates Sitemap**: Creates SEO-friendly sitemap.xml
6. **Adds .nojekyll**: Prevents GitHub Pages Jekyll processing

## 🌐 Live Site Features

The deployed static site includes:

✅ **All Original Features**:
- Responsive design with Bootstrap 5
- Professional portfolio showcase
- Contact information and services
- SEO optimization with meta tags
- Structured data for search engines

✅ **Static Site Optimizations**:
- Fast loading (no server processing)
- CDN-hosted dependencies (Bootstrap, fonts)
- Proper GitHub Pages configuration
- SEO-friendly URLs

❌ **Limitations** (Static Sites):
- No contact form processing (PHP-based forms won't work)
- No server-side dynamic content
- No database integration

## 🛠️ Customization

### Update Site Content:
1. Edit the PHP view files in `app/Views/`
2. Push changes to the master branch
3. GitHub Actions automatically rebuilds and redeploys

### Modify Build Process:
- Edit `build-static.php` to change how static files are generated
- Update `.github/workflows/static.yml` to modify the deployment process

### Custom Domain:
1. Add your domain in GitHub Pages settings
2. Create a `CNAME` file in the `dist/` directory (modify the build script)

## 📞 Alternative Hosting Options

While this guide focuses on GitHub Pages, the portfolio also supports:

- **PHP Hosting**: Use the original CodeIgniter 4 application on any PHP hosting
- **Other Static Hosts**: Use the generated `dist/` files on Netlify, Vercel, etc.
- **AWS S3**: Upload `dist/` contents to an S3 bucket with static hosting enabled

## 🔍 Troubleshooting

### Common Issues:

1. **Build Fails**:
   - Check PHP syntax in view files
   - Ensure all required view files exist
   - Verify GitHub Actions has proper permissions

2. **Links Don't Work**:
   - Check the URL processing in `build-static.php`
   - Ensure proper directory structure in `dist/`

3. **Assets Missing**:
   - Verify assets exist in `public/assets/`
   - Check file copying in the build script

4. **GitHub Pages Not Updating**:
   - Check GitHub Actions workflow completion
   - Verify Pages are enabled in repository settings
   - Clear browser cache

## 📈 Performance

The static site offers excellent performance:
- **Fast Loading**: No server processing required
- **CDN Assets**: Bootstrap and fonts served from CDN
- **Caching**: Static files can be aggressively cached
- **Mobile Optimized**: Responsive design works perfectly on static hosting

---

**🎉 Your portfolio is now ready for GitHub Pages deployment!**

For any issues or questions, check the GitHub Actions logs or review the build-static.php script.