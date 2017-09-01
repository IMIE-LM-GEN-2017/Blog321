@extends('templates.admin')

@section('title', 'Edition d\'une catégorie')

@section('content')

    <!-- Formulaire -->
    {!! Form::model($category, ['route' => ['AdminUpdateCat', $category->id]]) !!}
    <div class="field">
        <label for="name" class="label">Nom</label>
        <div class="control">
            {!! Form::text('name',null,[
            'placeholder'=>'Nom',
            'id'=>'name',
            'class'=>'input',
            'required'=>true,
            'value'=>$category->name]) !!}
        </div>
    </div>
    <div class="field">
        <label for="desc" class="label">Description</label>
        <div class="control">
            {!! Form::text('description',null,[
            'placeholder'=>'Description',
            'id'=>'desc',
            'class'=>'input',
            'value'=>$category->description]) !!}
        </div>
    </div>
    {!! Form::submit('Envoyer', ['class'=>'button is-primary']) !!}
    {!! Form::close() !!}
@endsection
