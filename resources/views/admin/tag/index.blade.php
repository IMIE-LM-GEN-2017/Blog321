@extends('templates.admin')

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
                            <a href="{{ route('AdminDelTag', ['id'=>$tag->id]) }}" class="button is-small is-danger">Supprimer</a>
                        </p>
                        <p class="control">
                            <a href="{{ route('AdminEditTag', ['id'=>$tag->id]) }}"
                               class="button is-small is-primary">Editer</a>
                        </p>
                        <p class="control">
                            <a href="{{ route('AdminViewTag', ['id'=>$tag->id]) }}"
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
