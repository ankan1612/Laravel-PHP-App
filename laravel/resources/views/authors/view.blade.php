@extends('layouts.default')

@section('content')
        <h1> {{ $author->name }} </h1>
        <p> {{ $author->bio }} </p>
@endsection
