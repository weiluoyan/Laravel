<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){

        $competitions = [
            ['name' => 'Speed Race 2024', 'date' => '2024-12-15', 'location' => 'Sydney'],
            ['name' => 'Drift Mania', 'date' => '2024-11-20', 'location' => 'Melbourne']
        ];

            $teamMembers = [
                ['name' => 'John Doe', 'role' => 'Team Leader', 'photo' => 'https://via.placeholder.com/150'],
                ['name' => 'Jane Smith', 'role' => 'Engineer', 'photo' => 'https://via.placeholder.com/150']
            ];

                return view('homepage', compact('competitions', 'teamMembers')); 
    }
}
