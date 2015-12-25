@extends('admin.layouts.master')

@section('content')


{!! Form::open(['url'=>'admin/articles','method'=>'post']) !!}

@include('admin.articles.form',['submitButton'=>'Create'])

{!! Form::close() !!}



@stop