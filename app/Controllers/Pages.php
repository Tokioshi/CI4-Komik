<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Tokioshy',
            'page'  => 'home'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me',
            'page'  => 'about'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'validation' => \Config\Services::validation(),
            'page'  => 'contact'
        ];

        return view('pages/contact', $data);
    }

    public function send()
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harap masukkan nama anda'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harap masukkan email anda'
                ]
            ],
            'message' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harap masukkan pesan anda'
                ]
            ]
        ])) {
            return redirect()->to('/pages/contact')->withInput();
        }

        return redirect()->to('/pages/contact');
    }
}
