@extends('layouts.default')

@section('content')
        <h1> {{ $author->name }} </h1>
        <p> {{ $author->bio }} </p>
        <span>
            {{  Html::linkRoute('edit', 'Edit author details', [$author->id]) }} |
            {{ Form::open(['url'=>'author/delete', 'method' => 'DELETE', 'style'=>'display:inline-block']) }}
            {{ Form::token() }}
            {{ Form::hidden('id',$author->id) }}
            {{ Form::submit('Delete Author') }}
            {{ Form::close() }}
       </span>
@endsection
