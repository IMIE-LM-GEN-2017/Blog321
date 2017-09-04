@extends('templates.default')

@section('title', 'Login')

@section('content')
    {!! Form::open(['route'=>'login']) !!}

    {!! Form::label('email', 'Adresse email', ['class'=>'label']) !!}
    {!! Form::email('email', old('email'), ['required', 'autofocus', 'class'=>'input']) !!}
    @if ($errors->has('email'))
        <strong>{{ $errors->first('email') }}</strong>
    @endif

    {!! Form::label('password', 'Mot de passe', ['class'=>'label']) !!}
    {!! Form::password('password', ['required', 'autofocus', 'class'=>'input']) !!}
    @if ($errors->has('password'))
        <strong>{{ $errors->first('password') }}</strong>
    @endif

    <label for="remember" class="label">
        {!! Form::checkbox('remember', old('remember'), ['id'=>'remember', 'class'=>'checkbox']) !!} Se souvenir de moi
    </label>

    {!! Form::submit('Login', ['class'=>'button is-primary']) !!}

    {!! Form::close() !!}

    <a href="{{ route('password.request') }}">Vous avez oublié votre mot de passe ?</a>
@endsection
