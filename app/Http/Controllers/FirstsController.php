<?php

namespace App\Http\Controllers;

use App\First;

use Illuminate\Http\Request;

class FirstsController extends Controller
{
    //
    public function index() 
    
    {

    	$firsts = first::all();

    	return view('firsts')->with('firsts', $firsts);
    }

    // Get the First element in to create/first and save in db, after redirect for firsts page
    public function store(Request $request) 

    {

    	$first = new First;


    	$first->first = $request->first;

    	$first->save();

    	return redirect()->back();
    }

    public function delete($id) 

    {

		$first = First::find($id);

		$first->delete();


		return redirect()->back();    	
    }

    public function update($id) 

    {

    	$first = First::find($id);

    	$first->update();


    	return redirect()->back();
    }
}
