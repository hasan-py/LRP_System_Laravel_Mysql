<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class File extends Controller
{
    function fileupload(Request $req){
    	return view('profile');
    }
}
