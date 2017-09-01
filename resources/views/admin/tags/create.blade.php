@extends('templates.admin')

@section('title', 'Nouveau tag')

@section('content')
    {!! Form::open(['route'=>'AdminTagStore']) !!}

    {!! Form::label('tag') !!}
    {!! Form::text('tag') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection