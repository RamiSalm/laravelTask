@extends('layouts.adminlayout')
    @section('content')
    {!! Form::open(['action' => ['UserController@update',Auth::user()->id ],'method' => 'POST','class'=>'form-signin text-center d-block']) !!}
        {{ csrf_field() }}
        {{ Form::hidden('_method','PUT')}}
        <h1 class="h3 mb-3 font-weight-normal">Your profile</h1>
        <p class="mb-3 font-weight-normal">if you dont want to change any field, make it as it was</p>
        <label class="labelform">Full Name</label>
            {{Form::text('name',Auth::user()->name,['class'=>'form-control','placeholder'=>'Full Name'])}}
        <label class="labelform">Email</label>
            {{Form::text('email',Auth::user()->email,['class'=>'form-control','placeholder'=>'Email'])}}
        <label class="labelform">Let him empty if you dont want change it</label>
        {{Form::text('password','',['class'=>'form-control','placeholder'=>'Password'])}}
        {{Form::text('password_confirmation','',['class'=>'form-control','placeholder'=>'ReEnter Password'])}}
    
        {{Form::submit('Update',['class'=>'btn btn-lg btn-success btn-block'])}}
    {!! Form::close() !!}
    <div class='clearfix'></div>
@endsection