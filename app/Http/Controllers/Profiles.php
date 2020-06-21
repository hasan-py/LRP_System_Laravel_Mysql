<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
    function profile(Request $req){
    	if($req->input('post')){
    		session()->flash('status','Post Published. ');
    	}
    	return view('profile');
    }
	
    function logout(){
    	session()->forget('data');
    	return redirect('login');
    }

    function login(Request $req){
    	$validate = $req->validate([
			"username"=>"required | min:5",
			"password"=>"required | min:8"
		]);
		if($validate){
    		$req->session()->put('data',$req->input());
    		return redirect('profiles');
    		// return $req->session()->get('data');
		}

    }
}

