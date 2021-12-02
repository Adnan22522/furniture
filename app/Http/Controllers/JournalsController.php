<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalsController extends Controller
{
    public function index(){

    	return view('main.journal');
    }
}
