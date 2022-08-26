<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Azhar Animations</a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button> --}}

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Signup</a></li>
            </ul>
            <form action="#" class="search-form ">
                <div class="form-group">
                    <span class="icon ion-ios-search"></span>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
</nav>

<hr>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ url('/products') }}" class="nav-link">Custom
                        Characters</a>
                </li>
                <li class="nav-item active"><a href="{{ url('/products') }}" class="nav-link">Human
                        Puppets</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
