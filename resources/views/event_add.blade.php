@extends('welcome')

@section('stylecss')


<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">

@endsection

@section('content')

<main class="event-form">
  <div class="cotainer">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <h3 class="card-header text-center">Wydarzenie</h3>
          <div class="card-body">
            <form method="POST" action="{{ route('event.add.custom') }}">
            @csrf
              <label>Tytuł</label>
              <div class="form-group mb-3">
                <input type="text" placeholder="Tytuł" id="title" class="form-control" name="title" required autofocus>
              </div>

              <label>Data</label>
              <div class="form-group mb-3">
                <input type="text" placeholder="MM/DD/RRRR" id="data" class="form-control" name="data" required>
              </div>

              <label>Czas rozpoczęcia</label>
              <div class="form-group mb-3">
                <input type="time" id="time" name="time" class="form-control">
              </div>

              <!-- <div class="form-group mb-3">
                <label>Opis</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
              </div> -->

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