@extends('templates.admin')

@section('title', 'Edition d\'une catégorie')

@section('content')
    {!! Form::model($post, ['route'=>['AdminCatUpdate', $post->id]]) !!}

    {!! Form::label('title') !!}
    {!! Form::text('title') !!}

    {!! Form::label('content') !!}
    {!! Form::textarea('content') !!}

    <p>Manque la sélection de catégorie. La catégorie par défaut sera "1"</p>
    <p>Manque la sélection de tags</p>

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection