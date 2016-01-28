<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Comment;

class ArticleController extends Controller
{
  
    public function index()
    {
    	$user = new User();
    	$article = new Article();
    	
    	$articles = $article->orderBy('updated_at', 'desc')->with('user')->get();
		$users = $user->with('roles')->get();

        return view('articles.articles', compact('articles','users'));
        
        
   	}

   	public function show($id)
   	{
   		$article = Article::find($id);
   		$user = User::find($article->user_id);
   		$comment = new Comment();
   		$comments = $comment->orderBy('updated_at', 'desc')->with('user')->get(); 
   		return view('articles.show',compact('article','user','comments'));
   	} 

}
