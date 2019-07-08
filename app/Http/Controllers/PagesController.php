<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{ 	
	// function for index page
    public function index(){
    	return view('pages.index');
    }

    // function for contact page
    public function contact(){
    	return view('pages.contact');
    }
}
