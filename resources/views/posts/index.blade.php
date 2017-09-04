@extends('templates.default')

@section('title', 'Liste des posts')

@section('content')
    <div class="columns is-multiline">
        @if(count($posts) === 0)
            <div class="message is-info">
                <div class="message-body">
                    Il n'y a pas encore d'articles. Revenez plus tard..;
                </div>
            </div>
        @endif
        @foreach($posts as $post)
            <div class="column is-one-quarter">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <a href="{{route('PostShow', ['id'=>$post->id])}}">{{$post->title}}</a>
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <small>{{$post->created_at}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection