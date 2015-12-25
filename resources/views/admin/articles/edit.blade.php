@extends('admin.layouts.master')

@section('content')

{!! Form::model($article,array('url' => array('admin/articles', $article->id),'method'=>'put')) !!}

@include('admin.articles.form',['submitButton'=>'Update'])

{!! Form::close() !!}

@stop