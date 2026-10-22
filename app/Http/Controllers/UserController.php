<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Gabriel Santos', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'Angela Reyes', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Mark Dela Cruz', 'role' => 'Cashier'],
            ['username' => 'staff01', 'full_name' => 'Nicole Garcia', 'role' => 'Staff'],
            ['username' => 'manager01', 'full_name' => 'John Mendoza', 'role' => 'Manager'],
        ];

        return view('users', compact('users'));
    }
}
