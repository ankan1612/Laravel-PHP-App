@extends('layouts.default')

@section('content')
  <h1>Add New Author</h1>
  {{Form::open(['url'=>'authors/create', 'method' => 'POST'])}}
  {{ Form::token() }}
  {{Form::label('name_label','Name : ')}}
  {{Form::text('name',Input::old('name'))}}
  <div style="color:red; font-width:bold;">
    {{$errors->first('name')}}
  </div>
  <br/>
  {{Form::label('bio_label','Bio : ')}}
  <br/>
  {{Form::textarea('bio',Input::old('bio'))}}
  <div style="color:red; font-width:bold;">
    {{$errors->first('bio')}}
  </div><br/>
  {{Form::submit('Add Author')}}
  {{ Form::close()}}
@endsection
