<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function HomePage(){

      return view('/pages/home');
  }
    public function contact_us(){

        return view('/pages/contact_us');
    }
    public function packages(){

        return view('/pages/packages');
    }
    public function payement(){

        return view('/pages/payement');
    }
}
