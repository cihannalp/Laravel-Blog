@extends('admin.layouts.master')

@section('content')

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
        <th>Created By</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
      <tr>
        <td><a href="/admin/articles/{{$article->id}}">{{ $article->title}}</a></td>
        <td>{{ $user->find($article->user_id)->name }}</td>
        <td>{{ $article->created_at }}</td>
        <td>{{ $article->updated_at }}</td>
        <td>
	    	<div class="btn-group">
				<a href="/admin/articles/{{ $article->id }}/edit" class="btn btn-success" }}>Edit</a>
				{!! Form::open(array('route' => array('admin.articles.destroy', $article->id), 'method' => 'delete', 'class' => 'deleteForm')) !!}
        <button type="submit" class="btn btn-danger">Delete</button>
        {!! Form::close() !!}
			  </div>
		</td>
      </tr>
    @endforeach  
    </tbody>
  </table>

@stop