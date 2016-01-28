@extends('layouts.master')

@section('content')

{!! Form::model($comment,array('url' => array('articles/comment', $comment->id),'method'=>'put')) !!}


<div class="form-group">
{!! Form::label('comment','Comment') !!}<br>
{!! Form::textarea('comment',null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
{!! Form::submit('Update Comment',['class' => 'btn-submit'])!!}
</div>

{!! Form::close() !!}

@stop