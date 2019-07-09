<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	// function for index page
    public function index(){
    	return view('Frontend.Layout.LayoutPages.LayoutIndex');
    }

    // function for contact page
    public function contact(){
    	return view('Frontend.Layout.LayoutPages.LayoutContact');
    }

    // function for all products pages
    public function products(){
      return view('Frontend.Product.ProductIndex');
    }

    // function for login pages
    public function Signin(){
      return view('Frontend.Authentication.Signin');
    }

    // function for register pages
    public function Register(){
      return view('Frontend.Authentication.Register');
    }
}
