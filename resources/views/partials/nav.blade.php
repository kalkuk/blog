<nav class="navbar navbar-expand-lg bg-body-tertiary my-2">
    <div class="container my-2">
        <a class="navbar-brand" href="{{route('index')}}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('articles.index') }}">Articles</a>
                            </li>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
            <ul class="navbar-nav ms-auto gap-2">
                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
                    </li>
                @else
                    <li class="nav-item dropstart">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{auth()->user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <form method="POST" action="{{route('logout')}}">
                                    @csrf
                                    <input type="submit" value="Logout" class="dropdown-item">
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
