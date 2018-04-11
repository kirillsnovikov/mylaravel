<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Film;

class IndexController extends Controller
{
	public function index()
	{
		$message = 'codelobster';
		$text    = 'conveying meaning to assistive technologies';
		
		$articles = Film::get(['id', 'title']);
		
		//dump($articles);
		//dump($articles);
		///
		
		return view('page')->with([	'message'=>$message,
									'text'=>$text,
									'articles'=>$articles]);
	}
}