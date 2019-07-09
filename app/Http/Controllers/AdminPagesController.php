<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    // function for admin index pages
    public function index(){
      return view('Backend.Admin.AdminPages.AdminIndex');
    }
}
