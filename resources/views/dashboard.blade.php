@extends('welcome')

@section('content')

<p>Witaj {{ $user['name']}}</p>
<p>Twój login to: {{ $user['email']}}</p>


@endsection