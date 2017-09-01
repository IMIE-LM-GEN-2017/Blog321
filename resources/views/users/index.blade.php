@extends('templates.default')

@section('title', 'Liste des membres')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>pseudo</td>
            <td>first_name</td>
            <td>last_name</td>
            <td>portfolio_url</td>
            <td>website_url</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="{{route('UserShow', ['id'=>$user->id])}}">Afficher</a>
                </td>
                <td>{{$user->id}}</td>
                <td>{{$user->pseudo}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->portfolio_url}}</td>
                <td>{{$user->website_url}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection