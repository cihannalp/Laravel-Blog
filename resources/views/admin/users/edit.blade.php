@extends('admin.layouts.master')

@section('content')
 <div class="container-fluid">
        <div class="row">
			<div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create User</div>
                    	<div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                       	{!! Form::model($user,array('url' => array('admin/users', $user->id),'method'=>'put')) !!}


						@include('admin.users.form',['submitButton'=>'Update User'])

						
						{!! Form::close() !!}


@stop