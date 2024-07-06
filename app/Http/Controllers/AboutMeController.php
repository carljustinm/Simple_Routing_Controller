<?php

namespace App\Http\Controllers;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'About Me',
            'content' => 'I am Carl Justin Baydo Masedman, 21 years old, born and raised in Baguio City, Philippines.
            I am currently taking up a Bachelor of Science in Information Technology at the University of the Cordilleras.'
        ];
        return view('about_me', $data);
    }
}