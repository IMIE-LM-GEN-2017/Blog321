@extends('templates.default')

@section('title', 'Affichage d\'une catégorie')

@section('content')
    {{var_dump($category->id)}}
    {{var_dump($category->name)}}
    {{var_dump($category->description)}}
    {{var_dump($category->created_at)}}
    {{var_dump($category->updated_at)}}
@endsection