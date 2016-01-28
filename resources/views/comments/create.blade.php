@extends('layouts.master')

@section('content')

{!! Form::open(['url'=>'/articles/{{$article->id}}','method'=>'post']) !!}


<div class="form-group">
<input name="articleID" type="hidden" value="{{ $article->id }}">
{!! Form::label('comment','Comment') !!}<br>
{!! Form::textarea('comment',null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
{!! Form::submit('Add Comment',['class' => 'btn-submit'])!!}
</div>

{!! Form::close() !!}

@stop