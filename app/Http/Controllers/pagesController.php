<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    // Method responsible for to return the view page New

	public function new()
	{

		return view('new');
	}


}
