<html>
<head>
    <title>Blog321 - @yield('title')</title>
</head>
<body>
@component('elements.navbar')
@endcomponent

@if(Session::has('message'))
    <h2>Information</h2>
    {{ session('message') }}
@endif

<h1 class="title">@yield('title')</h1>

<!-- Erreurs de validation -->
@if($errors->any())
    <h2>Erreur de formulaire</h2>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@yield('content')
</body>
</html>