<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
  
    public function index()
    {
        $article = Article::all();
        return view('articles.articles', compact('article'));
    }

}
