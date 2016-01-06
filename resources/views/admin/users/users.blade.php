@extends('admin.layouts.master')

@section('content')
<div class="well">
<h1>Users</h1><br>
</div>
<div align="left">
	<a href="/admin/users/create" class="btn btn-primary">Create New User</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th>User ID</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Role</th>
      </tr>
    </thead>
    <tbody>
    @foreach ( $users as $user )
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
       	<td>{{ App\Role::find(DB::table('role_user')->where('user_id',$user->id)->first()->role_id)->display_name}}</td>
       	<td>
       	<div class="btn-group">
			<a href="/admin/users/{{ $user->id }}/edit" class="btn btn-success" }}>Edit</a>
			{!! Form::open(array('route' => array('admin.users.destroy', $user->id), 'method' => 'delete', 'class' => 'deleteForm')) !!}
        	<button type="submit" class="btn btn-danger">Delete</button>
        	{!! Form::close() !!}
		</div>
		</td>
      </tr>
    @endforeach
    </tbody>
  </table>

@stop