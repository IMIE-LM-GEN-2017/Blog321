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
                Catégories
            </a>
            <a class="navbar-item " href="{{ route('TagIndex') }}">
                Tags
            </a>
            <a class="navbar-item " href="{{ route('AdminCatIndex') }}">
                [ADMIN]
            </a>
            @if(Auth::guest())
                <a class="navbar-item " href="{{ route('login') }}">
                    Login
                </a>
                <a class="navbar-item " href="{{ route('register') }}">
                    Inscription
                </a>
            @else
                <a class="navbar-item " href="{{ route('logout') }}"
                   onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        </div>
    </div>
</nav>












