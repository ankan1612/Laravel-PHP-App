@extends('layouts.default')

@section('content')
  <h1>Add New Author</h1>
  {{Form::open(['url'=>'authors/create', 'method' => 'POST'])}}
  {{Form::label('name_label','Name : ')}}
  {{Form::text('name')}}<br/>
  {{Form::label('bio_label','Bio : ')}}<br/>
  {{Form::textarea('bio')}}<br/>
  {{Form::submit('Add Author')}}
  {{ Form::close()}}
@endsection
