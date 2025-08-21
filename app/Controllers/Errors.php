<?php

namespace App\Controllers;

class Errors extends BaseController
{
    public function show404()
    {
        $data = [
            'title' => '404 - Page Not Found',
            'description' => 'The page you are looking for could not be found.',
            'active_page' => ''
        ];
        
        return $this->response
            ->setStatusCode(404)
            ->setBody(
                view('templates/header', $data) .
                view('errors/404', $data) .
                view('templates/footer')
            );
    }
    
    public function show500()
    {
        $data = [
            'title' => '500 - Server Error',
            'description' => 'An internal server error occurred.',
            'active_page' => ''
        ];
        
        return $this->response
            ->setStatusCode(500)
            ->setBody(
                view('templates/header', $data) .
                view('errors/500', $data) .
                view('templates/footer')
            );
    }
}
