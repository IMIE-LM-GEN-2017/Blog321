<nav class="navbar ">
    <ul class="navbar-start">
        <li>
            <a href="{{ route('CatIndex') }}">[PUBLIC]</a>
        </li>
        <!-- Membres -->
        <li>
            <a href="{{ route('AdminUserIndex') }}">Membres</a>
        </li>
        <!-- Catégories -->
        <li>
            <a href="{{ route('AdminCatIndex') }}">Categories</a>
        </li>
        <li>
            <a href="{{ route('AdminCatCreate') }}">Nouvelle catégorie</a>
        </li>
        <!-- Tags -->
        <li>
            <a href="{{ route('AdminTagIndex') }}">Tags</a>
        </li>
        <li>
            <a href="{{ route('AdminTagCreate') }}">Nouveau tag</a>
        </li>
    </ul>
    </div>
</nav>