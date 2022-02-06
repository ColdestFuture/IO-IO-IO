@extends('welcome')

@section('stylecss')


<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">

@endsection

@section('content')

<?php
$data_d= $event->Data;
$dat=strtotime($data_d);
$time = date('h:i',$dat);
$data = date('Y-m-d',$dat);
?>

<main class="event-form">
  <div class="cotainer">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <h3 class="card-header text-center">Edytuj wydarzenie</h3>
          <div class="card-body">
            <form method="POST" action="{{ route('event.edit.custom') }}">
            @csrf
              <label>Tytuł</label>
              <div class="form-group mb-3">
                <input type="text"  id="ID" class="form-control" name="ID" value="{{ $event->id}}" readonly>
              </div>

              <label>Tytuł</label>
              <div class="form-group mb-3">
                <input type="text" placeholder="Tytuł" id="title" class="form-control" name="title" value="{{ $event->title}}" required autofocus>
              </div>

              <label>Data</label>
              <div class="form-group mb-3">
              <input type="hidden" id="data_2" class="form-control" name="data" value="{{ $data}}">
                <input type="text" id="data" class="form-control" name="data" value="{{ $data}}" required>
              </div>

              <label>Czas rozpoczęcia</label>
              <div class="form-group mb-3">
                <input type="time" id="time" name="time" class="form-control" value="{{$time}}">
              </div>

              <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-dark btn-block">Dodaj</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="{{ asset('js/time.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

@endsection