@extends('templates.admin')

@section('title', 'Liste des articles')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>catgory</td>
            <td>title</td>
            <td>created</td>
            <td>updated</td>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>
                    <a href="{{route('AdminPostDestroy', ['id'=>$post->id])}}">Supprimer</a>
                    <a href="{{route('AdminPostEdit', ['id'=>$post->id])}}">Editer</a>
                    <a href="{{route('AdminPostShow', ['id'=>$post->id])}}">Afficher</a>
                </td>
                <td>{{$post->id}}</td>
                <td>{{$post->category_id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection