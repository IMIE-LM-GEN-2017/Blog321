@extends('templates.default')

@section('title', 'Affichage ...')

@section('content')
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
    <h2 class="title">Articles</h2>
    <p>Ici, la liste des articles</p>
@endsection