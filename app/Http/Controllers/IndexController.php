<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class IndexController extends Controller
{
	public function index()
	{
		$message = 'codelobster';
		$text    = 'conveying meaning to assistive technologies';
		
		$articles = Article::get(['id', 'title', 'desc']);
		
		//dump($articles);
		//dump($articles);
		///
		
		return view('page')->with([	'message'=>$message,
									'text'=>$text,
									'articles'=>$articles]);
	}
}