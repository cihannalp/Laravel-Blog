@extends('admin.layouts.master')

@section('content')

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
      </tr>
    @endforeach
    </tbody>
  </table>

@stop