@extends('layouts.reglayout')

@section('content')
        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <form class="form-signin text-center d-block" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <img class="mb-4" src="../img/lo.png" alt="" width="72" height="72">
            <div class="h2 mb-3 font-weight-normal">Reset Password</div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="h4 mb-3 font-weight-normal">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <input type="submit" class="btn btn-lg btn-warning btn-block" value="Send Password Reset Link">
            <a class="btn btn-lg btn-primary btn-block" href="{{ route('login') }}">
                Back to login page
            </a>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>      
@endsection
