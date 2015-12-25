@extends('admin.layouts.master')

@section('content')
<div class="well">
<h1>{{ $article->title }}</h1><br>
</div>
<div class="well">
<p>{{ $article->body  }}</p><br>
</div>
<div class="well-sm">
<p>Created at : {{ $article->created_at }}</p>
<p>Updated at : {{ $article->updated_at }}</p>
</div>
@stop