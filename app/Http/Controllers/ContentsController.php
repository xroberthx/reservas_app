<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function home()
	{
		$data = array();//para algunas versiones de php
		$data["version"] = "v1.0";
		$data["compilacion"] = "21";
		return view('/contents/home', $data); 
	}	
}
