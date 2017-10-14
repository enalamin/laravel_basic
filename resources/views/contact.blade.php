@extends('layout.app')
@section('content')
	<h2>Contact</h2>
	{!! Form::open(['url' => 'contact/submit']) !!}
    	<div class="form-group">
    		{{Form::label('name', 'Name')}}
    		{{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Name'] )}}
    	</div>
    	<div class="form-group">
    		{{Form::label('email', 'E-Mail Address')}}
    		{{Form::text('email', '',['class'=>'form-control','placeholder'=>'Enter email'] )}}
    	</div>
    	<div class="form-group">
    		{{Form::label('message', 'Message')}}
    		{{Form::textarea('message', '',['class'=>'form-control','placeholder'=>'Enter message'] )}}
    	</div>
    	<div>
    		{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    	</div>
	{!! Form::close() !!}
@endsection