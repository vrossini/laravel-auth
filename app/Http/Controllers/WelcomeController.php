<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
    	$produtos = \App\Produto::paginate(3);
    	return view('welcome',compact('produtos'));
    }
}