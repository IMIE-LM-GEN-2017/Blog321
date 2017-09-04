@if(Auth::guest())
    <a class="navbar-item" href="{{ route('login') }}">Login</a>
    <a class="navbar-item" href="{{ route('register') }}">Inscription</a>
@else
    <div class="navbar-item has-dropdown is-hoverable">
        <div class="navbar-link"><i class="fa fa-fw fa-user"></i> {{ auth()->user()->pseudo }}</div>
        <div id="CatsDropdown" class="navbar-dropdown is-right">
            <a class="navbar-item" href="{{ route('AdminCatIndex') }}">
                <i class="fa fa-fw fa-cogs"></i> Administration
            </a>
            <a class="navbar-item" href="{{ route('AdminUserDashboard') }}">
                <i class="fa fa-fw fa-user"></i> Mon compte
            </a>

            <hr class="navbar-divider">

            <a class="navbar-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">{{ csrf_field() }}</form>
        </div>
    </div>
@endif