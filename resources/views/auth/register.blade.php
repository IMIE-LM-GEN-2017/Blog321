@extends('templates.default')

@section('title', 'Register')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <label for="pseudo">Pseudo</label>

        <div>
            <input id="pseudo" type="text" name="pseudo" value="{{ old('pseudo') }}" required autofocus>

            @if ($errors->has('pseudo'))
                <strong>{{ $errors->first('pseudo') }}</strong>
            @endif

            <label for="email">E-Mail Address</label>

            <input id="email" type="email" name="email" value="{{ old('email') }}"
                   required>

            @if ($errors->has('email'))
                <strong>{{ $errors->first('email') }}</strong>
            @endif

            <label for="password">Password</label>

            <input id="password" type="password" name="password" required>

            @if ($errors->has('password'))
                <strong>{{ $errors->first('password') }}</strong>
            @endif

            <label for="password-confirm">Confirm Password</label>

            <input id="password-confirm" type="password" name="password_confirmation"
                   required>
        </div>

        <button type="submit" class="btn btn-primary">
            Register
        </button>
    </form>
@endsection
