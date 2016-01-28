<?php

namespace App\Http\Controllers\Admin;

use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Flash;
use Auth;
use App\User;
class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Article::orderBy('updated_at','desc')->get();
        $user = new User();
    	return view('admin.articles.articles', compact('articles','user'));
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
        Auth::user()->articles()->create([
            'title' => $input['title'],
            'body'  => $input['body']
            ]);

           	
        Flash::success('Article is created successfully...');
    	return redirect('admin/articles');

    }

    
    public function edit($id)
    {	
    	$article = Article::find($id);
        
        return view('admin.articles.edit', compact('article'));
        
    }

    
    public function update($id)
    {	
    	$article = Article::find($id);
    	$input = Request::all();
    	$article->update([
    		'title'=>$input['title'],
    		'body' =>$input['body']
    		]);
        Flash::warning('Article is updated successfully...');    
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
