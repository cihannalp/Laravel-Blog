@extends('admin.layouts.master')

@section('content')
@include('partials.flashMessage')
<div class="well">
<h1>Articles</h1><br>
</div>
<div align="left">
	<a href="/admin/articles/create" class="btn btn-primary">Create New Article</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
      <tr>
        <td><a href="/admin/articles/{{$article->id}}">{{ $article->title}}</a></td>
        <td>{{ $article->created_at }}</td>
        <td>{{ $article->updated_at }}</td>
        <td>
	    	<div class="btn-group">
				<a href="/admin/articles/{{ $article->id }}/edit" class="btn btn-success">Edit</a>
				<a href="/admin/articles/{{ $article->id }}/destroy" class="btn btn-danger">Delete</a>
			</div>
		</td>
      </tr>
    @endforeach  
    </tbody>
  </table>

@stop