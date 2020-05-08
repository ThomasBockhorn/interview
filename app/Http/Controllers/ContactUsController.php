<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * This will display the about us page for the website
     */
    public function index()
    {
        return view('contact_us');
    }
}