<?php

namespace App\Controllers;

class Users extends BaseController {

    public function index(){
        $data['users'] = [
            [
                'username' => 'admin',
                'fullname' => 'Chiriemie Keith G. Rimando',
                'role' => 'Admin'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'Juan Dela Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'fullname' => 'Kashieca Hannah Peneyra',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'fullname' => 'Ysabelle Castor',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'fullname' => 'Mark Gabriel',
                'role' => 'Staff'
            ],
        ];

        return view('users', $data);
    }
    
}

?>