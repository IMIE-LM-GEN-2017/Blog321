@extends('templates.admin')

@section('title', 'Catégorie ' . $category->name)

@section('content')
    <a href="{{ route('AdminCatDestroy', ['id'=>$category->id]) }}" class="button is-danger">Supprimer</a>
    <a href="{{ route('AdminCatEdit', ['id'=>$category->id]) }}" class="button is-primary">Editer</a>

    <pre>
        {{var_dump($category->id)}}
        {{var_dump($category->name)}}
        {{var_dump($category->description)}}
        {{var_dump($category->created_at)}}
        {{var_dump($category->updated_at)}}
    </pre>
@endsection