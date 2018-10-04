@extends('layouts.homelayout')

@section('content')
    <div class="container">
    <div class="addpatient">
        <h3>Add New Patient new</h3>
        <p>Please insert The correct information to ensure the public service</p>
        {!! Form::open(['action' => 'PatientController@store' ,'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="formstyle form-control">
            {{Form::label( 'Enter The Patient Full Name')}}<br>
            {{Form::text('name','',['placeholder'=>'Full Name'])}}<br>
            {{Form::label( 'Enter The Disease For Patient')}}<br>
            {{Form::text('disease','',['placeholder'=>'The Disease'])}}<br>
            {{Form::label( 'Enter The State of Patient')}}<br>
            {{Form::text('user_id',Auth::user()->id,['hidden'])}}
            <select name="state">
                @foreach($iraq_state as $x)
                    {
                        <option>{{$x}}</option>
                    }
                @endforeach

            </select><br>
            <label>Enter Date of Birth For Patient</label><br>
            Year&nbsp;<select name="year">
                @for($i=date('Y')-100;$i<=date('Y')-1;$i++)
                    <option>{{$i}}</option>
                @endfor
            </select>
            Month&nbsp;<select name="month">
                @for($i=1;$i<=12;$i++)
                    <option>{{$i}}</option>
                @endfor
            </select>
            </div>
            {{Form::submit('Add New Patient',['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
    </div>
    </div>
    <div style="height: 85px"></div>
@endsection