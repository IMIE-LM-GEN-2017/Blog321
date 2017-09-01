@extends('templates.default')

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
                            <a href="{{ route('ViewCat', ['id'=>$category->id]) }}" class="button is-small is-primary">Afficher</a>
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
