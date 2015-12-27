@extends('layouts.master')

@section('content')

@foreach ($article as $articles)
<div class="well" align="left">
<h3>{{ $articles->title}}</h3><br>

	{{ $articles->body}}	
</div>
@endforeach

@stop