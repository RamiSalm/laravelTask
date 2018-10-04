@extends('layouts.adminlayout')

@section('content')
    {!! Form::open(['action' => 'UserController@store' ,'method' => 'POST','class'=>'form-signin text-center d-block']) !!}
        {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal">Fill The information</h1>
        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Full Name'])}}
        {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}
        {{Form::text('password','',['class'=>'form-control','placeholder'=>'Password'])}}
        {{Form::text('password_confirmation','',['class'=>'form-control','placeholder'=>'ReEnter Password'])}}
    
        {{Form::submit('Add Admin',['class'=>'btn btn-lg btn-primary btn-block'])}}
    {!! Form::close() !!}
    
    <div class='clearfix'></div>
@endsection