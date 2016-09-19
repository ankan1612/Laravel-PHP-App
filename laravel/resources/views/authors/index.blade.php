@extends('layouts.default')

@section('content')
  <h1>Authors Pages</h1>
  <ul>
    @foreach ($authors as $author)
            <li>{{ Html::linkRoute('author', $author->name, array($author->id)) }}</li>
    @endforeach
  </ul>
  {{ Html::linkRoute('author_new', 'Create new author')}}
@endsection
