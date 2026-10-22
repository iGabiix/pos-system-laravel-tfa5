<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09171234567'],
            ['full_name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09181234567'],
            ['full_name' => 'Pedro Reyes', 'email' => 'pedro@example.com', 'phone' => '09191234567'],
            ['full_name' => 'Anna Garcia', 'email' => 'anna@example.com', 'phone' => '09201234567'],
            ['full_name' => 'Carlo Mendoza', 'email' => 'carlo@example.com', 'phone' => '09211234567'],
        ];

        return view('customers', compact('customers'));
    }
}
