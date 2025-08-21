<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::welcome_message');
$routes->get('about', 'Home::about');
$routes->get('freelancing', 'Home::freelancing');
$routes->get('contact', 'Home::contact');
$routes->get('projects', 'Home::projects');
$routes->get('sitemap.xml', 'Home::sitemap');
