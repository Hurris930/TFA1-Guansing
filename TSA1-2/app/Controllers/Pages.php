<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about(): string
    {
        $data = [
            'title'      => 'About',
            'activePage' => 'about',
        ];

        return view('assets/layouts/header', $data)
            . view('assets/pages/about/about', $data)
            . view('assets/layouts/footer');
    }
}
