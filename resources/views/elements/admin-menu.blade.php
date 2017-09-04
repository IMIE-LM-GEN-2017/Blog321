<nav class="navbar ">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}"><strong>Blog321</strong></a>
        <div class="navbar-burger burger" data-target="navMenubd">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navMenubd" class="navbar-menu">
        <div class="navbar-start">
            <a href="{{ url('/') }}" class="navbar-item"><i class="fa fa-fw fa-globe"></i> Site public</a>

            <!-- Posts -->
            <div class="navbar-item has-dropdown is-hoverable">
                <div class="navbar-link">
                    <i class="fa fa-fw fa-file-text-o"></i> Articles
                </div>
                <div id="PostsDropdown" class="navbar-dropdown ">
                    <a href="{{ route('AdminPostIndex') }}" class="navbar-item">
                        <i class="fa fa-fw fa-list"></i> Liste
                    </a>
                    <a href="{{ route('AdminPostCreate') }}" class="navbar-item">
                        <i class="fa fa-fw fa-plus"></i> Nouveau post
                    </a>
                </div>
            </div>

            <!-- Catégories -->
            <div class="navbar-item has-dropdown is-hoverable">
                <div class="navbar-link">
                    <i class="fa fa-fw fa-book"></i> Catégories
                </div>
                <div id="PostsDropdown" class="navbar-dropdown ">
                    <a href="{{ route('AdminCatIndex') }}" class="navbar-item">
                        <i class="fa fa-fw fa-list"></i> Liste
                    </a>
                    <a href="{{ route('AdminCatCreate') }}" class="navbar-item">
                        <i class="fa fa-fw fa-plus"></i> Nouvelle catégorie
                    </a>
                </div>
            </div>

            <!-- Tags -->
            <div class="navbar-item has-dropdown is-hoverable">
                <div class="navbar-link">
                    <i class="fa fa-fw fa-tags"></i> Tags
                </div>
                <div id="PostsDropdown" class="navbar-dropdown ">
                    <a href="{{ route('AdminTagIndex') }}" class="navbar-item">
                        <i class="fa fa-fw fa-list"></i> Liste
                    </a>
                    <a href="{{ route('AdminTagCreate') }}" class="navbar-item">
                        <i class="fa fa-fw fa-plus"></i> Nouveau tag
                    </a>
                </div>
            </div>

            <!-- Membres -->
            <a href="{{ route('AdminUserIndex') }}" class="navbar-item">
                <i class="fa fa-fw fa-users"></i> Membres
            </a>
        </div>
        <div class="navbar-end">
            @component('elements.user-menu')@endcomponent
        </div>
    </div>
</nav>