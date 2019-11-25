<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function basefungsi(){
        return view('base');
      }
      public function dashboardfungsi(){
        return view('dashboard');
      }
}
