@extends('templates.admin')

@section('title', 'Liste des catégories')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Id</th>
            <th>Nom</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>
                    <div class="field has-addons">
                        <p class="control">
                            <a href="{{ route('AdminDelCat', ['id'=>$category->id]) }}" class="button is-small is-danger">Supprimer</a>
                        </p>
                        <p class="control">
                            <a href="{{ route('AdminEditCat', ['id'=>$category->id]) }}" class="button is-small is-primary">Editer</a>
                        </p>
                        <p class="control">
                            <a href="{{ route('AdminViewCat', ['id'=>$category->id]) }}" class="button is-small is-primary"><i class="fa fa-trash"></i></a>
                        </p>
                    </div>
                </td>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
