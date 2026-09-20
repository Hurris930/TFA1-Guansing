<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@email.com',
                'phone' => '0917 123 4567'
            ],
            [
                'full_name' => 'Maria Angela Santos',
                'email' => 'maria.santos@email.com',
                'phone' => '0928 234 5678'
            ],
            [
                'full_name' => 'Rafael Pascual',
                'email' => 'rafael.pascual@email.com',
                'phone' => '0918 345 6789'
            ],
            [
                'full_name' => 'Katrina Lim',
                'email' => 'katrina.lim@email.com',
                'phone' => '0936 456 7890'
            ],
            [
                'full_name' => 'Daniel Chong',
                'email' => 'daniel.chong@email.com',
                'phone' => '0908 567 8901'
            ]
        ];

        return view('customers', $data);
    }
}