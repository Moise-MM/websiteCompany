<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Header;
use App\Models\Company;
use App\Models\ContactSection;
use App\Models\Project;
use App\Models\Service;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function index():View
    {

        return view('home.index',[
            'header' => Header::find(1),
            'about' => About::find(1),
            'service' => Service::find(1),
            'project' => Project::find(1),
            'company' => Company::find(1),
            'contact' => ContactSection::find(1)
        ]);
    }
}
