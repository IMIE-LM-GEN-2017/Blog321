<nav class="navbar ">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">Blog321</a>
        <div class="navbar-burger burger" data-target="navMenubd">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navMenubd" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="{{ route('PostIndex') }}"><i class="fa fa-fw fa-file-text-o"></i> Posts</a>
            <a class="navbar-item" href="{{ route('UserIndex') }}"><i class="fa fa-fw fa-users"></i> Membres</a>
            <a class="navbar-item" href="{{ route('CatIndex') }}"><i class="fa fa-fw fa-book"></i> Catégories</a>
            <a class="navbar-item" href="{{ route('TagIndex') }}"><i class="fa fa-fw fa-tags"></i> Tags</a>
        </div>

        <div class="navbar-end">
            @component('elements.user-menu')@endcomponent
        </div>
    </div>
</nav>












