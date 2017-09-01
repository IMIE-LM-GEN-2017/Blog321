@extends('templates.admin')

@section('title', 'Nouveau tag')

@section('content')
    {!! Form::open(['route'=>'AdminSaveTag']) !!}}
    {!! Form::text('tag',null, ['placeholder'=>'Nom']) !!}
    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection
