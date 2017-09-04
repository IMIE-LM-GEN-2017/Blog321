@extends('templates.admin')

@section('title', 'Liste des tags')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>name</td>
            <td>description</td>
            <td>created</td>
            <td>updated</td>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>
                    <a href="{{route('AdminCatDestroy', ['id'=>$category->id])}}">Supprimer</a>
                    <a href="{{route('AdminCatEdit', ['id'=>$category->id])}}">Editer</a>
                    <a href="{{route('AdminCatShow', ['id'=>$category->id])}}">Afficher</a>
                </td>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection