@extends('welcome')

@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Oceny</h3>
                        <div class="card-body">

                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Polski
                                        @foreach ($polski as $pocena)

                                        <span class="badge bg-primary rounded-pill">{{$pocena->Ocena}}</span>
                                        @endforeach
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Matematyka
                                        @foreach ($matematyka as $mocena)

                                            <span class="badge bg-primary rounded-pill">{{$mocena->Ocena}}</span>
                                        @endforeach
                                    </li>
                                </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
