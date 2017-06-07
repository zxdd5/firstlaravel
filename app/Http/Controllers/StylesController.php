<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StylesController extends Controller
{
    public function home(){
      return view('static_pages/home');
    }
    public function help(){
      return view('static_pages/help');
    }
}
