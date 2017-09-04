<?php
/**
 * @var \Illuminate\Database\Eloquent\Collection $tags
 */
?>

@extends('templates.default')

@section('title', 'Liste des tags')

@section('content')
    @if(count($tags) === 0)
        <div class="message is-info">
            <div class="message-body">
                Il n'y a pas encore de tags. Revenez plus tard..;
            </div>
        </div>
    @else
        <div class="tags">
            @foreach($tags as $tag)
                <span class="tag">
                    <a href="{{ route('TagShow', ['id'=>$tag->id]) }}">{{ $tag->tag }}</a>
                </span>
            @endforeach
        </div>
    @endif
@endsection