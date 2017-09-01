@extends('templates.default')

@section('title', 'Liste des tags')

@section('content')
    <a href="{{route('NewTag')}}">Nouveau tag</a>
    <table class="table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Id</th>
            <th>Nom</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tagsPourLaVue as $tag)
            <tr>
                <td>
                    <div class="field has-addons">
                        <p class="control">
                            <a href="{{ route('DelTag', ['id'=>$tag->id]) }}" class="button is-small is-danger">Supprimer</a>
                        </p>
                        <p class="control">
                            <a href="{{ route('EditTag', ['id'=>$tag->id]) }}"
                               class="button is-small is-primary">Editer</a>
                        </p>
                        <p class="control">
                            <a href="{{ route('ViewTag', ['id'=>$tag->id]) }}"
                               class="button is-small is-primary">Afficher</a>
                        </p>
                    </div>
                </td>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->tag }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
