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
}
