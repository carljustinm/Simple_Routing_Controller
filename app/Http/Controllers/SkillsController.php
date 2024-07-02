<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Skills',
            'skills' => [
                'Knowledgeable in HTML, Python, and Java',
                'Knowledgeable in design thinking',
                'Knowledgeable in multimedia arts',
                'Knowledgeable in basic routing and switching',
                'Advanced communication skills in English',
                'Advanced communication skills in Filipino'
            ]
        ];
        return view('skills', $data);
    }
}
