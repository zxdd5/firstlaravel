<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticPagesController extends Controller
{
    public function home(){
      return view('static_pages/home');
    }
    public function user(){
      return view('static_pages/user');
    }
}
