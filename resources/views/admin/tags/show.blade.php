@extends('templates.admin')

@section('title', 'Tag '.$tag->tag)

@section('content')
    <a href="{{ route('AdminTagDestroy', ['id'=>$tag->id]) }}" class="button is-danger">Supprimer</a>
    <a href="{{ route('AdminTagEdit', ['id'=>$tag->id]) }}" class="button is-primary">Editer</a>
    <pre>
        {{var_dump($tag->id)}}
        {{var_dump($tag->tag)}}
        {{var_dump($tag->created_at)}}
        {{var_dump($tag->updated_at)}}
    </pre>
@endsection