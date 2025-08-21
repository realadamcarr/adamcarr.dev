<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',
            'description' => 'Adam Carr - Professional Software Developer',
            'active_page' => 'home'
        ];
        
        return view('templates/header', $data) .
            view('welcome_message', $data) .
            view('templates/footer');
    }

    public function welcome_message(): string
    {
        $data = [
            'title' => 'Home',
            'description' => 'Adam Carr - Professional Software Developer',
            'active_page' => 'home'
        ];
        
        return view('templates/header', $data) .
            view('welcome_message', $data) .
            view('templates/footer');
    }

    public function about(): string
    {
        $data = [
            'title' => 'About',
            'description' => 'Learn more about Adam Carr - Professional Software Developer',
            'active_page' => 'about'
        ];
        
        return view('templates/header', $data) .
            view('about', $data) .
            view('templates/footer');
    }

    public function freelancing(): string
    {
        $data = [
            'title' => 'Freelancing',
            'description' => 'Freelancing services by Adam Carr - Professional Software Developer',
            'active_page' => 'freelancing'
        ];
        
        return view('templates/header', $data) .
            view('freelancing', $data) .
            view('templates/footer');
    }

    public function contact(): string
    {
        $data = [
            'title' => 'Contact',
            'description' => 'Get in touch with Adam Carr - Professional Software Developer',
            'active_page' => 'contact'
        ];
        
        return view('templates/header', $data) .
            view('contact', $data) .
            view('templates/footer');
    }

    public function projects(): string
    {
        $data = [
            'title' => 'Projects',
            'description' => 'View projects by Adam Carr - Professional Software Developer',
            'active_page' => 'projects'
        ];
        
        return view('templates/header', $data) .
            view('projects', $data) .
            view('templates/footer');
    }

    public function sitemap()
    {
        $urls = [
            [
                'loc' => base_url(),
                'lastmod' => date('Y-m-d'),
                'priority' => '1.0'
            ],
            [
                'loc' => base_url('about'),
                'lastmod' => date('Y-m-d'),
                'priority' => '0.8'
            ],
            [
                'loc' => base_url('projects'),
                'lastmod' => date('Y-m-d'),
                'priority' => '0.9'
            ],
            [
                'loc' => base_url('freelancing'),
                'lastmod' => date('Y-m-d'),
                'priority' => '0.8'
            ],
            [
                'loc' => base_url('contact'),
                'lastmod' => date('Y-m-d'),
                'priority' => '0.7'
            ]
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        
        foreach ($urls as $url) {
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . $url['loc'] . '</loc>' . "\n";
            $xml .= '    <lastmod>' . $url['lastmod'] . '</lastmod>' . "\n";
            $xml .= '    <priority>' . $url['priority'] . '</priority>' . "\n";
            $xml .= '  </url>' . "\n";
        }
        
        $xml .= '</urlset>';

        return $this->response
            ->setContentType('application/xml')
            ->setBody($xml);
    }
}
