<nav class="tm-nav" id="tm-nav">
    <ul>
        <li class="tm-nav-item {{request()->routeIs('index') ? 'active' : '' }}"><a href="{{route('index')}}"
                class="tm-nav-link">
                <i class="fas fa-home"></i>
                Forum Post
            </a></li>
        @auth
        <li class="tm-nav-item {{request()->routeIs('create') ? 'active' : '' }}">
            <a href="/create" class="tm-nav-link">
                <i class="fas fa-pen"></i>
                Create Post
            </a>
        </li>
        @endauth

        @can('admin')
        <li class="tm-nav-item {{request()->routeIs('create') ? 'active' : '' }}">
            <a href="/create" class="tm-nav-link">
                <i class="fas fa-pen"></i>
                Admin Panel
            </a>
        </li>
        @endcan
    </ul>
</nav>