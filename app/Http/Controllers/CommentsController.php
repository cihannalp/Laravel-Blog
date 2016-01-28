<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Comment;
use Auth;
class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $article = Article::find($id);
        return view('comments.create', compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $request = Request::all();
        $comment = new Comment();
        $comment->user()->associate(Auth::user()->id);
        $comment->article()->associate($request['articleID']);
        $comment->comment = $request['comment'];
        

        $comment->save();

        return redirect('/articles/'.$request['articleID']);

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        $comment = Comment::find($id);
        if($comment->user_id != Auth::user()->id)
        {
            return redirect()->back();
        }    
        return view('comments.edit',compact('comment'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $request = Request::all();
        $comment = Comment::find($id);
        
        $comment->update([
            'comment' => $request['comment']
            ]);
       
       
        return redirect('/articles/'.$comment->article_id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $comment = Comment::find($id);
        if($comment->user_id != Auth::user()->id)
        {
            return redirect()->back();
        }    
        $article = $comment->article_id;
        $comment->delete();
        return redirect('/articles/'.$article);
    }
}
