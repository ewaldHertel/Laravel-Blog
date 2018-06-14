@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.css') }}">
@stop

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">Login</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <form action="{{ route('login') }}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="Passwort">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> Passwort speichern?
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit"
                                class="btn btn-primary btn-block btn-flat">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="auth-links">
                <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}"
                   class="text-center"
                >{{ trans('adminlte::adminlte.i_forgot_my_password') }}</a>
            </div>
        </div>
        <!-- /.login-box-body -->
    </div><!-- /.login-box -->
@stop
