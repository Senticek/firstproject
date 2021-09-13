<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('/img/Laravel.svg') }}" class="svg-logo" /></a>
            <div class="nav-title mobile">
                <h1>Laravel Blog</h1>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <div class="nav-title nav-item">
                        <h1 class="nav-link">Laravel Blog</h1>
                    </div>
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Domů</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/create">Nový článek</a>
                        </li>
                    @endauth
                </ul>

                @auth
                    <div class="user-nav">
                        {{ Auth::user()->name }}
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
</header>
