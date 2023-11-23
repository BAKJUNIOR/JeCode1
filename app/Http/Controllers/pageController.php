<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
  public function about () {
        return view("pages.service");
    }

    public function apropos () {
        return view("pages.apropos");
    }

    public function service () {
        return view("pages.service");
    }
}
