<nav class="navbar ">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">
            Blog321
        </a>

        <div class="navbar-burger burger" data-target="navMenubd">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navMenubd" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item " href="{{ route('UserIndex') }}">
                Membres
            </a>
            <a class="navbar-item " href="{{ route('CatIndex') }}">
                Categories
            </a>
            <a class="navbar-item " href="{{ route('NewCat') }}">
                Nouvelle catégorie
            </a>
        </div>
    </div>
</nav>