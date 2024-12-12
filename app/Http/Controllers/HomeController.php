<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();
        $contacts = Contact::all();
        $projects = Project::all();
        $skill = Skill::all();
        return view('home', compact('certificates','contacts','projects','skill'));
    }
}
    