@extends('layouts.reglayout')

@section('content')
    <form class="form-signin text-center d-block" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <img class="mb-4" src="img/lo.png" alt="" width="72" height="72">
        <div class="h3 mb-3 font-weight-normal">Registertion</div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name"
            >
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Password confirm">
        </div>

        <input type="submit" class="btn btn-lg btn-success btn-block" value="Register">
        <a class="btn btn-lg btn-primary btn-block" href="{{ route('login') }}">
            Alreade have account!
        </a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
@endsection
