<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\skill;

class ResumeController extends Controller
{
    public function index()
    {

        // get all the skills
        $skills = skill::all();

        return view('resume', ['skills' => $skills]);


    }
}