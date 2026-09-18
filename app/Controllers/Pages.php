<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function landing()
    {
        return view('landing');
    }

    public function about()
    {
        return view('about');
    }

    public function customers()
    {
        $customers = [
        [
            'name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com',
            'phone' => '09171234567'
        ],
        [
            'name' => 'Maria Santos',
            'email' => 'maria@example.com',
            'phone' => '09181234567'
        ],
        [
            'name' => 'Pedro Reyes',
            'email' => 'pedro@example.com',
            'phone' => '09191234567'
        ],
        [
            'name' => 'Ana Garcia',
            'email' => 'ana@example.com',
            'phone' => '09201234567'
        ],
        [
            'name' => 'Mark Lopez',
            'email' => 'mark@example.com',
            'phone' => '09211234567'
        ]
        ];

        return view('customers',[
            'customers' => $customers
        ]);
    }

    public function users()
    {
        $users = [
            [
                'name' => 'Juan Dela Cruz',
                'username' => 'juan123',
                'role' => 'Administrator'
            ],
            [
                'name' => 'Maria Santos',
                'username' => 'maria456',
                'role' => 'Staff'
            ],
            [
                'name' => 'Pedro Reyes',
                'username' => 'pedro789',
                'role' => 'Staff'
            ],
            [
                'name' => 'Ana Garcia',
                'username' => 'ana101',
                'role' => 'Manager'
            ],
            [
                'name' => 'Mark Lopez',
                'username' => 'mark202',
                'role' => 'Staff'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}