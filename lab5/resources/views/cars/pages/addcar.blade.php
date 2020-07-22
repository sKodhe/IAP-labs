@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">{{$data['title']}}</h1>
        {{ Form::open(['action'=>'CarsController@newcar','method'=>'POST','class'=>'col-lg-6 col-offset-4 centered']) }}
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        {{Form::label('make', 'Make')}}
                        {{Form::text('make','',['class'=>'form-control','placeholder'=>'Make'])}}
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {{Form::label('model', 'Model')}}
                        {{Form::text('model','',['class'=>'form-control','placeholder'=>'Model'])}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        {{Form::label('produced_on', 'Produced On')}}
                        {{Form::date('produced_on','',['class'=>'form-control','placeholder'=>'Produced On'])}}
                    </div>
            </div>
            </div>
           
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {{Form::submit('Add Car',['class'=>'btn btn-primary'])}}
                    </div>
                </div>
            </div>
            
        {{ Form::close() }}
        
    </div>
@endsection