<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid justify-content-between">
        <!-- Left elements -->
        <div class="d-flex">

            <!-- Search form -->
            <form class="input-group w-auto my-auto d-none d-sm-flex" method="GET" action="/">
                @if (request('category'))
                <input type="hidden" name="category" value="{{request('category')}}">
                @endif

                <input type="text" name="search" class="form-control rounded" placeholder="Search..."
                    style="min-width: 125px;" />
                <span class="input-group-text border-0 d-none d-lg-flex"><i class="fas fa-search text-white"></i></span>
            </form>
        </div>
        <!-- Left elements -->

        <!-- Right elements -->
        <ul class="navbar-nav flex-row">
            @auth
            <li class="nav-item me-3 me-lg-1">
                <a class="nav-link d-sm-flex align-items-sm-center" href="#">
                    <strong class="d-none d-sm-block ms-1 text-white">{{auth()->user()->username}}</strong>
                </a>
            </li>
            <li class="nav-item dropdown me-3 me-lg-1">
                <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-chevron-circle-down fa-lg"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Profile</a>
                    </li>
                    <li>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
            @else
            <li class="nav-item me-3 me-lg-1">
                <a class="nav-link d-sm-flex align-items-sm-center" href="{{route('register')}}">
                    <strong class="d-none d-sm-block ms-1 text-white">Register</strong>
                </a>
            </li>
            <li class="nav-item me-3 me-lg-1">
                <a class="nav-link d-sm-flex align-items-sm-center" href="{{route('login')}}">
                    <strong class="d-none d-sm-block ms-1 text-white">Login</strong>
                </a>
            </li>
            @endauth
        </ul>
        <!-- Right elements -->
    </div>
</nav>
<!-- Navbar -->