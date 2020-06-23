<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

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

    function fileupload(Request $request){
        $img->role_id = $request->input('image');
        if ($request->hasfile('image')) {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension(); // get img extension
        $filename = time() . '.' . $extention;
        $file->move('upload/profile_image/',$filename);
        $img->image = $filename;
        }else{
        return $request;
        $img->image = '';
        }
        $img->save();
        return redirect()->back()->with('success','Image Inserted SuccessFully....');
    }

    function db(Request $request){
        return DB::select("SELECT * FROM `users`");
    }
}

