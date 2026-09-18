<?php

namespace App\Controllers;

class Customers extends BaseController {

    public function index(){
        $data['customers'] = [
            [
                'fullname' => 'Chiriemie Keith G. Rimando',
                'email' => 'ckgrimando@gmail.com',
                'phone' => '09171583673'
            ],
            [
                'fullname' => 'Elliesha Emina SD. Pascual',
                'email' => 'eminapascual@gmail.com',
                'phone' => '09171334567'
            ],
            [
                'fullname' => 'Alezzandra Isabel B. Gregorio',
                'email' => 'alezgregorio@gmail.com',
                'phone' => '09171189768'
            ],
            [
                'fullname' => 'Kharisma Maerel M. Matias',
                'email' => 'kharisma@gmail.com',
                'phone' => '09191765432'
            ],
            [
                'fullname' => 'John Madrid S. Abringe',
                'email' => 'jmabringe@gmail.com',
                'phone' => '09167654321'
            ],
        ];

        return view('customers', $data);
    }
    
}

?>