@extends('templates.admin')

@section('title', 'Liste des tags')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>tag</td>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>
                    <a href="{{route('AdminTagDestroy', ['id'=>$tag->id])}}">Supprimer</a>
                    <a href="{{route('AdminTagEdit', ['id'=>$tag->id])}}">Editer</a>
                    <a href="{{route('AdminTagShow', ['id'=>$tag->id])}}">Afficher</a>
                </td>
                <td>{{$tag->id}}</td>
                <td>{{$tag->tag}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection