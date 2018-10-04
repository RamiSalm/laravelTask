@extends('layouts.adminlayout')

@section('content')
<div class="row text-center info">
    <div class="col-sm-2.5">
        <i class="fas fa-user-circle fa-3x"></i>
        <h4>Admins</h4>
        {{$counts['admin']}}
    </div>
    <div class="col-sm-2.5">
        <i class="fa fa-users fa-3x"></i>
        <h4>Users</h4>
        {{$counts['user']}}
    </div>
    <div class="col-sm-2.5">
        <i class="fa fa-hospital-alt fa-3x"></i>
        <h4>Patient</h4>
        {{$counts['patient']}}
    </div>
    <div class="col-sm-2.5">
        <i class="fa fa-search fa-3x"></i>
        <h4>All search process</h4>
        {{$counts['search']}}
    </div>
</div>
    
<div class='clearfix'></div>
@endsection