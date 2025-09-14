# Adam Carr - Professional Software Developer Portfolio

A modern, responsive portfolio website built with CodeIgniter 4, showcasing professional software development services and projects.

## 🚀 Features

- **Responsive Design**: Mobile-first approach with Bootstrap 5
- **Modern UI/UX**: Clean, professional design with smooth animations
- **SEO Optimized**: Meta tags, structured data, sitemap, and optimized content
- **Performance Optimized**: Compressed assets, browser caching, and optimized images
- **Security Enhanced**: Security headers, file protection, and input validation
- **Contact Form**: Interactive contact form with validation
- **Project Portfolio**: Showcase of development projects and skills

## 📋 Tech Stack

- **Backend**: PHP 8.2+ with CodeIgniter 4
- **Frontend**: HTML5, CSS3, Bootstrap 5, JavaScript (ES6+)
- **Database**: MySQL (for future contact form submissions)
- **Icons**: Bootstrap Icons
- **Version Control**: Git

## 🛠️ Installation & Deployment

### 🌐 GitHub Pages Deployment (Recommended)

**The easiest way to deploy this portfolio:**

1. **Fork this repository** to your GitHub account
2. **Enable GitHub Pages**:
   - Go to Settings → Pages
   - Set source to "GitHub Actions" 
3. **Automatic deployment**: Every push to `master` branch automatically builds and deploys the site
4. **Your site will be live** at: `https://yourusername.github.io/adamcarr.dev`

> 📖 **Detailed Guide**: See [GITHUB_PAGES.md](GITHUB_PAGES.md) for complete instructions

### 🖥️ Local Development & PHP Hosting

For local development or PHP hosting deployment:

#### Prerequisites
- PHP 8.2 or higher
- Composer
- Web server (Apache/Nginx)
- MySQL (optional, for contact form)

#### Setup Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/realadamcarr/adamcarr.dev.git
   cd adamcarr.dev
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Configure environment**
   ```bash
   cp env .env
   ```
   Edit `.env` file with your settings:
   ```
   CI_ENVIRONMENT = production
   app.baseURL = 'https://yourdomain.com/'
   ```

4. **Set permissions**
   ```bash
   chmod -R 755 writable/
   ```

5. **Configure web server**
   Point document root to `public/` directory

## 📱 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 📞 Contact

- **Email**: [adam@adamcarr.dev](mailto:adam@adamcarr.dev)
- **GitHub**: [@realadamcarr](https://github.com/realadamcarr)
- **LinkedIn**: [adamcarr](https://linkedin.com/in/adamcarr)
- **Website**: [adamcarr.dev](https://adamcarr.dev)

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📖 Important Notes

### index.php Location

`index.php` is located inside the `public/` folder for better security and separation of components.

When deploying to PHP hosting, configure your web server to point to the `public/` directory as the document root.

### GitHub Pages vs PHP Hosting

- **GitHub Pages**: Automatically generates static HTML files for fast, free hosting
- **PHP Hosting**: Full dynamic functionality with server-side processing

See [GITHUB_PAGES.md](GITHUB_PAGES.md) for detailed deployment instructions.

---

**Built with ❤️ by Adam Carr using CodeIgniter 4 and Bootstrap 5**
