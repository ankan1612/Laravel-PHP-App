@extends('layouts.default')

@section('content')
  <h1>Edit Author</h1>
  {{Form::open(['url'=>'authors/update', 'method' => 'POST'])}}
  {{Form::label('name_label','Name : ')}}
  {{Form::text('name', $author->name)}}
  <div style="color:red; font-width:bold;">
    {{$errors->first('name')}}
  </div>
  <br/>
  {{Form::label('bio_label','Bio : ')}}
  <br/>
  {{Form::textarea('bio',$author->bio)}}
  <div style="color:red; font-width:bold;">
    {{$errors->first('bio')}}
  </div><br/>
  {{ Form::hidden('id',$author->id) }}
  {{Form::submit('Edit Author')}}
  {{ Form::close()}}
@endsection
