@extends('templates.default')

@section('title', 'Liste ...')

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
                    <a href="{{route('CatShow', ['id'=>$category->id])}}">Afficher</a>
                </td>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->created}}</td>
                <td>{{$category->updated}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection