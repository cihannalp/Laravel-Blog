@extends('layouts.master')

@section('content')

<div class="well well-lg" align="left">
<h3>{{$article->title}}</h3> 
<p>{{$article->body}}</p>
<p align="right" style="color:red;">{{$user->roles->first()->display_name}}
<div align="right">
	Published By {{$user->name}}
	<div align="left">
		<a href="/articles/{{$article->id}}/comment/create">Add New Comment</a>
	</div>
</div>
</p>
</div>


<div class="container">
<div class="row">
<div class="col-sm-12">

@foreach($comments as $comment)
@if($comment->article_id == $article->id)
</div><!-- /col-sm-12 -->
</div><!-- /row -->
<div class="row">
<div class="col-sm-1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="col-sm-5">
<div class="panel panel-default">
<div class="panel-heading">
<strong>{{$comment->user->name}}</strong> 
<span class="text-muted">{{\Carbon\Carbon::createFromTimeStamp(strtotime($comment->updated_at))->diffForHumans()}}</span>
@if($comment->user_id == Auth::user()->id)
<div align="right"><a href="/articles/comment/{{$comment->id}}/edit">Edit</strong>
<a href="/articles/comment/{{$comment->id}}/destroy"  onclick="return confirm('Are You Sure');">Delete</strong></div>
@endif
</div>
<div class="panel-body">
{{$comment->comment}}
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->
@endif
@endforeach



</div><!-- /row -->

</div><!-- /container -->

@stop