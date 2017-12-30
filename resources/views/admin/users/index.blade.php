@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
<div class="row">

  <div class="col-lg-12 margin-tb">

      <div class="pull-right">

          <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>

      </div>

  </div>

</div>

@if ($message = Session::get('success'))

<div class="alert alert-success">

  <p>{{ $message }}</p>

</div>

@endif

<table class="table table-bordered">

<tr>

  <th>No</th>

  <th>Name</th>

  <th>Email</th>

  <th>Roles</th>

  <th width="280px">Action</th>

</tr>

@foreach ($users as $user)

<tr>

<td>{{ $user->id }}</td>

<td>{{ $user->name }}</td>

<td>{{ $user->email }}</td>

<td>

  @if(!empty($user->roles))

    @foreach($user->roles as $v)

      <label class="label label-success">{{ $v->display_name }}</label>

    @endforeach

  @endif

</td>

<td>

  <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

  <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

  {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

      {!! Form::close() !!}

</td>

</tr>

@endforeach

</table>

{{ $users->links() }}
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
