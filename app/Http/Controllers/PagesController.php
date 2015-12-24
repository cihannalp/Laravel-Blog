<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
	{
		return view('pages.homepage');
	}    

	public function about()
	{
		$myName = 'Cihan Alp';
		return view('pages.about', compact('myName'));
	}

	public function contact()
	{
		return view('pages.contact');
	}

}
