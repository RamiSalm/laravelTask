@extends('layouts.adminlayout')

@section('content')
    {!! Form::open(['action' => 'UserController@index' ,'method' => 'get','class'=>'form-signin text-center d-block']) !!}
     
    <div style="margin-right: 190px;display: inline;">
        <input type='submit' name='admin' value="Delete Admin" class="btn btn-lg btn-warning ">
    </div>
    <input type='submit' name='user' value="Delete User" class="btn btn-lg btn-warning ">
    {!! Form::close() !!}
    
            @if(isset($users))
                <table class="table table-striped" style="margin-top: 27px;display: inline-table; width: 80%;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">email</th>
                        <th scope="col">username</th>
                        <th scope="col">Date</th>
                        <th scope="col"> </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                        <td scope='row'>{{ $loop->iteration }}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                        {!! Form::open(['action' => ['UserController@destroy',$user->id ],'method' => 'POST']) !!}
                        {{ Form::hidden('_method','DELETE')}}
                        {{ Form::submit('Delete',['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
   
    
    <div class='clearfix'></div>
@endsection