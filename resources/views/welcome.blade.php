<!DOCTYPE html>
<html>
<head>
    <title>SqlDiary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css"> -->
        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

        <!-- Styles -->
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        @yield('stylecss')
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
                        <a class="nav-link" href="{{ route('login') }}">Logowanie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Rejestracja</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="">Wiadomości</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('plan') }}">Plan zajęć</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Oceny</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Uwagi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kalendarz') }}">Kalendarz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Ustawienia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Wyloguj się</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @yield('content')
</body>

</html>