@extends('templates.default')

@section('title', 'Catégorie : '.$category->name)

@section('content')
    {{auth()->user()->pseudo}}
    <p>{{ $category->description }}</p>

    <h2 class="title">Articles</h2>

    @foreach($category->posts as $post)
        <div class="column is-one-quarter">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <a href="{{route('PostShow',
                        ['id'=>$post->id])}}">{{$post->title}}</a>
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        Article par {{ $post->user->pseudo }}
                        <small>{{$post->created_at}}</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection