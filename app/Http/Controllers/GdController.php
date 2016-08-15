<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GdController extends Controller
{
    public function create (){
    	return view('gd.create');
    }
}
