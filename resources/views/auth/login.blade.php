@extends('layouts.reglayout')

@section('content')
    <form class="form-signin text-center d-block" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <img class="mb-4" src="img/lo.png" alt="" width="72" height="72">
        <div class="h3 mb-3 font-weight-normal">Login</div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email address">
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
            
        <input type="submit" class="btn btn-lg btn-primary btn-block" style="width: 45%; float: left; margin-right: 0px;" value='Login'>
        <a class="btn btn-lg btn-primary btn-block" style="width: 45%;margin-left: 165px;" href="{{ route('register') }}">
            Register
        </a>
        <a class="btn btn-lg btn-danger btn-block" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
@endsection
