<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * This will display the about us page for the website
     */
    public function index()
    {
        return view('about');
    }
}