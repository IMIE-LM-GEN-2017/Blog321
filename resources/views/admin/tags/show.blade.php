@extends('templates.admin')

@section('title', 'Affichage d\'un tag')

@section('content')
    {{var_dump($tag->id)}}
    {{var_dump($tag->tag)}}
    {{var_dump($tag->created_at)}}
    {{var_dump($tag->updated_at)}}
@endsection