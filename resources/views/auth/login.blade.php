@extends('templates.default')

@section('title', 'Identification')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <label for="email">E-Mail Address</label>

        <input id="email" type="email" name="email" value="{{ old('email') }}" required
               autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>


        <button type="submit">
            Login
        </button>

        <a href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>

    </form>
@endsection