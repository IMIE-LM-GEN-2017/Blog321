@extends('templates.admin')

@section('title', 'Nouvel article')

@section('content')
    {!! Form::open(['route'=>'AdminPostStore']) !!}

    {!! Form::label('title') !!}
    {!! Form::text('title') !!}

    {!! Form::label('content') !!}
    {!! Form::textarea('content') !!}
    
    {!! Form::label('Catégorie du post') !!}
    {!! Form::select('category_id', $categories) !!}

    {!! Form::label('Tags du post') !!}
    {!! Form::select('post.tags[]', $tags, null, ['multiple'=>true]) !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection













