<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SqlDiary</title>

    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css"> -->
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('stylecss')
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">SqlDiary</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    @dyrektor
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages') }}">Wiadomości</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('grade_choose') }}">Oceny</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Uwagi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Nauczyciele</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Uczniowie</a>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    @yield('content')
</body>

</html>
