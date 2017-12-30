@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
      </div>
  </div>
</div>

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

{!! Form::model($user, ['method' => 'PUT','route' => ['users.update', $user->id]]) !!}

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Name:</strong>
      {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Email:</strong>
      {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Password:</strong>
      {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
    </div>
  </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Confirm Password:</strong>
        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Role:</strong>
        <br/>
        @foreach ($roles as $role)
        <label>
          <input type="checkbox" name="roles[]" value="{{$role->id}}" class="form-check-input"
          @if(isset($user->roles[0]))
           {{ $user->roles[0]->id === $role->id ? 'checked' : '' }}>{{ $role->name }}
          @else
            >{{ $role->name }}
          @endif
        </label>
        <br/>
        @endforeach
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

{!! Form::close() !!}
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
