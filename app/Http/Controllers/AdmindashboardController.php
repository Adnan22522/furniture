<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class AdmindashboardController extends Controller
{
	public function __construct(){

		// $this->middleware(['auth','admin']);
	}
	
    public function index(){

    	return view('admin.dashboard');
    }

    public function profile($id){

    	$profile= Profile::find($id);
    	return view('admin.user.profile',compact('profile'));
    }
}
