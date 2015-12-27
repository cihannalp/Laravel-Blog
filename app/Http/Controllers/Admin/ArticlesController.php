<?php

namespace App\Http\Controllers\Admin;

use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Flash;
class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Article::orderBy('updated_at','desc')->get();

    	return view('admin.articles.articles', compact('articles'));
    }

    
    public function show($id)
    {
    	$article = Article::find($id);
    	return view('admin.articles.show',compact('article'));
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
    	
        Flash::overlay('Article is created successfully...');
    	return redirect('admin/articles');

    }

    
    public function edit($id)
    {	
    	$article =Article::find($id);
    	return view('admin.articles.edit', compact('article'));

    }

    
    public function update($id)
    {	
    	$article =Article::find($id);
    	$input = Request::all();
    	$article->update([
    		'title'=>$input['title'],
    		'body' =>$input['body']
    		]);
        Flash::overlay('Article is updated successfully...');    
    	return redirect('/admin/articles');
    }

    
    public function destroy($id)
    {
    	$article = Article::find($id);
    	$article->delete();
        Flash::error('Article is deleted successfully...');	
    	return redirect('/admin/articles');
    }

}
