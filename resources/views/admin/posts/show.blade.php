@extends('templates.admin')

@section('title', $post->title)

@section('content')
    <a href="{{ route('AdminPostDestroy', ['id'=>$post->id]) }}" class="button is-danger">Supprimer</a>
    <a href="{{ route('AdminPostEdit', ['id'=>$post->id]) }}" class="button is-primary">Editer</a>

    <pre>
        {{var_dump($post->id)}}
        {{var_dump($post->title)}}
        {{var_dump($post->content)}}
        {{var_dump($post->created_at)}}
        {{var_dump($post->updated_at)}}
    </pre>
@endsection