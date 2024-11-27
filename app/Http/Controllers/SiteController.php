<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index(){
        $about_us = About::all();
        

        

    }

    
}