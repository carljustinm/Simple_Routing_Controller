<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Hobbies',
            'hobbies' => [
                'Watching films',
                'Reading books',
                'Playing games',
                'Writing'
            ]
        ];
        return view('hobbies', $data);
    }
}
