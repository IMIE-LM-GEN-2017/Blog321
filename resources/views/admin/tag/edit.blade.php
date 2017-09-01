@extends('templates.admin')

@section('title', 'Edition d\'un tag')

@section('content')
    {!! Form::model($enregistrement, [
        'route'=>['AdminUpdateTag', $enregistrement->id]
        ]) !!}}
    {!! Form::text('tag',null, ['placeholder'=>'Nom']) !!}
    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection
