@extends('templates.admin')

@section('title', $user->pseudo)

@section('content')
    <a href="{{ route('AdminUserDestroy', ['id'=>$user->id]) }}" class="button is-danger">Supprimer</a>
    <a href="{{ route('AdminUserEdit', ['id'=>$user->id]) }}" class="button is-primary">Editer</a>

    <pre>
        {{var_dump($user->id)}}
        {{var_dump($user->pseudo)}}
        {{var_dump($user->first_name)}}
        {{var_dump($user->last_name)}}
        {{var_dump($user->email)}}
        {{var_dump($user->role)}}
        {{var_dump($user->birthday)}}
        {{var_dump($user->portfolio_url)}}
        {{var_dump($user->website_url)}}
        {{var_dump($user->created_at)}}
        {{var_dump($user->updated_at)}}
    </pre>
@endsection