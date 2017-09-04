@extends('templates.default')

@section('title', $post->title)

@section('content')
    Tags :
    @foreach($post->tags as $tag)
        <i class="fa fa-tag"></i> {{ $tag->tag }},
    @endforeach
    <pre>
        <hr>
        {{var_dump($post->id)}}
        {{var_dump($post->title)}}
        {{var_dump($post->content)}}
        {{var_dump($post->user_id)}}
        {{var_dump($post->category_id)}}
        {{var_dump($post->created_at)}}
        {{var_dump($post->updated_at)}}
    </pre>
@endsection