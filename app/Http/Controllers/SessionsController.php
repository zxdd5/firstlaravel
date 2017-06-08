<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class SessionsController extends Controller
{
  public function create()
  {
      return view('sessions.create');
  }
  public function store(Request $request){
    $this->validate($request,[
        'email' => 'required|email|max:255',
        'password' => 'required'
      ]]);
      return;
  }
}
