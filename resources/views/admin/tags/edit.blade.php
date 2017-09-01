@extends('templates.admin')

@section('title', 'Edition d\'un tag')

@section('content')
    {!! Form::model($tag, ['route'=>['AdminTagUpdate', $tag->id]]) !!}

    {!! Form::label('tag') !!}
    {!! Form::text('tag') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection