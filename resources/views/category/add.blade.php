@extends('templates.default')

@section('title', 'Nouvelle catégorie')

@section('content')
    {!! Form::open(['route' => 'NewCat']) !!}
    {!! Form::text('name',null,['placeholder'=>'Nom']) !!}<br>
    {!! Form::text('description',null,['placeholder'=>'Description']) !!}
    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection
