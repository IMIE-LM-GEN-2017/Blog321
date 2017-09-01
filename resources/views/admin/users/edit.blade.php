@extends('templates.admin')

@section('title', 'Edition ...')

@section('content')
    {!! Form::model($user, ['route'=>['AdminUserUpdate', $user->id]]) !!}

    {!! Form::label('email') !!}
    {!! Form::text('email') !!}

    Note: Pas de modif du mdp pour le moment, je vois ça plus tard dans le weekend

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection