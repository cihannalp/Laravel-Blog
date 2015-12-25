<?php

namespace App\Http\Controllers\Admin;

use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Article::all();
    	return view('admin.articles.articles', compact('articles'));
    }

    public function create()
    {
    	return view('admin.articles.create');

    }

    public function store()
    {	
    	$input = Request::all();
    	Article::create([
    		'title'=>$input['title'],
    		'body' =>$input['body']
    		]);
    	
    	return redirect('admin/articles');

    }
}
