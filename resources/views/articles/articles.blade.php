@extends('layouts.master')

@section('content')

@foreach ($articles as $article)
<div class="well well-lg" align="left">
<h3><a href="/articles/{{$article->id}}">{{ $article->title}}</a></h3><br>

	<p>{{ $article->body}}</p>
	
	<div align="right">
		<p> 
		<div style="color:red;">
		{{ $users->find($article->user_id)->roles->first()->display_name }}
		</div>
		Published By {{ strtoupper($article->user->name) }}
		<p>{{ $article->updated_at }}</p>
		</p>
	</div>
	
	<div align="left">
		<a href="/articles/{{$article->id}}/comment/create">Add New Comment</a>
	</div>		
</div>
@endforeach

@stop