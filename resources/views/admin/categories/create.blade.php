@extends('templates.admin')

@section('title', 'Nouvelle catégorie')

@section('content')
    {!! Form::open(['route'=>'AdminCatStore']) !!}

    {!! Form::label('name') !!}
    {!! Form::text('name') !!}

    {!! Form::label('description') !!}
    {!! Form::textarea('description') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection