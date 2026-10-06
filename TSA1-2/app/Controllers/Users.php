<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function profile(): string
    {
        $userModel = new UserModel();

        $data = [
            'title'      => 'Profile',
            'activePage' => 'profile',
            'user'       => $userModel->orderBy('id', 'ASC')->first(),
        ];

        return view('assets/layouts/header', $data)
            . view('assets/pages/users/profile', $data)
            . view('assets/layouts/footer');
    }
}
