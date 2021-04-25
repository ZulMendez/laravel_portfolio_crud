<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Projet;
use App\Models\Skill;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        $about = About::all();
        $skills = Skill::all();
        $projets = Projet::all();
        $contact = Contact::all();
        return view('home', compact('about', 'skills', 'projets', 'contact'));
    }
}
