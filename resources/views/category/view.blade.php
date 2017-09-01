@extends('templates.default')

@section('title', $category->name)

@section('content')
    <dl>
        <dt>Id</dt>
        <dd>{{ $category->id }}</dd>
        <dt>Nom</dt>
        <dd>{{ $category->name }}</dd>
        <dt>Description</dt>
        <dd>{{ $category->description }}</dd>
    </dl>
@endsection
