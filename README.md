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

## 🛠️ Installation

### Prerequisites
- PHP 8.2 or higher
- Composer
- Web server (Apache/Nginx)
- MySQL (optional, for contact form)

### Setup Steps

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

- **Email**: adam@adamcarr.dev
- **GitHub**: [@realadamcarr](https://github.com/realadamcarr)
- **LinkedIn**: [adamcarr](https://linkedin.com/in/adamcarr)
- **Website**: [adamcarr.dev](https://adamcarr.dev)

---

Built with ❤️ by Adam Carr using CodeIgniter 4 and Bootstrap 5
while still keeping as many of the things intact that has made people love the framework over the years.

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

### Documentation

The [User Guide](https://codeigniter.com/user_guide/) is the primary documentation for CodeIgniter 4.

You will also find the [current **in-progress** User Guide](https://codeigniter4.github.io/CodeIgniter4/).
As with the rest of the framework, it is a work in progress, and will see changes over time to structure, explanations, etc.

You might also be interested in the [API documentation](https://codeigniter4.github.io/api/) for the framework components.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

CodeIgniter is developed completely on a volunteer basis. As such, please give up to 7 days
for your issues to be reviewed. If you haven't heard from one of the team in that time period,
feel free to leave a comment on the issue so that it gets brought back to our attention.

> [!IMPORTANT]
> We use GitHub issues to track **BUGS** and to track approved **DEVELOPMENT** work packages.
> We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
> FEATURE REQUESTS.

If you raise an issue here that pertains to support or a feature request, it will
be closed! If you are not sure if you have found a bug, raise a thread on the forum first -
someone else may have encountered the same thing.

Before raising a new GitHub issue, please check that your bug hasn't already
been reported or fixed.

We use pull requests (PRs) for CONTRIBUTIONS to the repository.
We are looking for contributions that address one of the reported bugs or
approved work packages.

Do not use a PR as a form of feature request.
Unsolicited contributions will only be considered if they fit nicely
into the framework roadmap.
Remember that some components that were part of CodeIgniter 3 are being moved
to optional packages, with their own repository.

## Contributing

We **are** accepting contributions from the community! It doesn't matter whether you can code, write documentation, or help find bugs,
all contributions are welcome.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing/README.md).

CodeIgniter has had thousands on contributions from people since its creation. This project would not be what it is without them.

<a href="https://github.com/codeigniter4/CodeIgniter4/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=codeigniter4/CodeIgniter4" />
</a>

Made with [contrib.rocks](https://contrib.rocks).

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

## Running CodeIgniter Tests

Information on running the CodeIgniter test suite can be found in the [README.md](tests/README.md) file in the tests directory.
