@extends('layouts.homelayout')

@section('content')
    
    <div style="max-height: 100%;display: inline-block;float: left;height: 543px;"></div>
    <div class="container">
        <div class="addpatient">
            {!! Form::open(['action' => 'PatientController@index' ,'method' => 'get','class'=>'form-inline']) !!}
                {{ csrf_field() }}
                {{Form::label( "Enter The name of Patient or Enter 'All' to view all Patient")}}
                <div class="form-group mx-sm-3 mb-2">
                {{Form::text('name','',['class'=>'form-control','placeholder'=>'Search here'])}}<br>
                {{Form::select('sort', ['asc' => 'Ascending', 'desc' => 'Descending'],['class'=>'form-group mx-sm-3 mb-2 select'])}}
                </div>
                {{Form::submit('Search',['class'=>'btn btn-primary mb-2'])}}
            {!! Form::close() !!}
        </div>
    </div>
    @if(isset($patients))
        <div class="container">
        <table class="table table-striped" style="margin-bottom: 24%;">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Disease</th>
              <th scope="col">State</th>
              <th scope="col">Age</th>
            </tr>
          </thead>
          <tbody>
            @foreach($patients as $patient)
                <tr>
                <td scope='row'>{{ $loop->iteration }}</td>
                <td>{{ucwords($patient->fullname)}}</td>
                <td>{{ucwords($patient->disease)}}</td>
                <td>{{ucwords($patient->state)}}</td>
                <td>{{str_replace('-','',strstr($patient->birthdate, '-', true)-date('Y'))}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    @else
        <div class='clearfix'></div>

    @endif

@endsection