<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin01',
                'full_name' => 'Hurris Guansong',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Angela Reyes',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Mark Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Nicole Garcia',
                'role' => 'Staff'
            ],
            [
                'username' => 'staff02',
                'full_name' => 'Joshua Lim',
                'role' => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}