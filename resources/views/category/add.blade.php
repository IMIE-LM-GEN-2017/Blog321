@extends('templates.default')

@section('title', 'Nouvelle catégorie')

@section('content')

    <!-- Formulaire -->
    {!! Form::open(['route' => 'SaveNewCat']) !!}
    <div class="field">
        <label for="name" class="label">Nom</label>
        <div class="control">
            {!! Form::text('name',null,[
            'placeholder'=>'Nom',
            'id'=>'name',
            'class'=>'input',
            'required'=>true]) !!}
        </div>
    </div>
    <div class="field">
        <label for="desc" class="label">Description</label>
        <div class="control">
            {!! Form::text('description',null,[
            'placeholder'=>'Description',
            'id'=>'desc',
            'class'=>'input']) !!}
        </div>
    </div>
    {!! Form::submit('Envoyer', ['class'=>'button is-primary']) !!}
    {!! Form::close() !!}
@endsection
