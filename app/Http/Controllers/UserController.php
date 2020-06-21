<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	function index(){
		$data = ["name"=>"Emon","age"=>12];
		$list = [234,636,46,46];
		$context = ["data"=>$data,"list"=>$list];
		return view('user',compact("context"));
	}
}
