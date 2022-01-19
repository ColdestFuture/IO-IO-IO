<!DOCTYPE html>
<html>
<head>
    <title>SqlDiary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">SqlDiary</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages') }}">Wiadomości</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Oceny</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Uwagi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Oceny</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Kalendarz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Ustawienia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Wyloguj</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>