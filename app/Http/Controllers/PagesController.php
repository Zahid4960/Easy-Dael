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

    // function for all products pages
    public function products(){
      return view('pages.products.index');
    }
}
