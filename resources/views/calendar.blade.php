@extends('welcome')

@section('stylecss')


<!-- Scripts -->
<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

<!-- Styles -->
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
<!-- <link href='../lib/main.css' rel='stylesheet' />
<script src='../lib/main.js'></script> -->

<script src="{{ asset('js/main.js') }}" defer></script>
<link href="{{ asset('css/main.css') }}" rel="stylesheet">

<script>
  var zmienna_JS = <?php echo $events; ?>;
  /*alert(zmienna_JS);
  alert(zmienna_JS[0]['title']);*/
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var aktualna_data = new Date();
    var mies = (aktualna_data.getMonth() + 1 < 10) ? ('0' + (aktualna_data.getMonth() + 1)) : (aktualna_data.getMonth() + 1);
    var dzien = (aktualna_data.getDay() < 10) ? ('0' + (aktualna_data.getDay())) : (aktualna_data.getDay());
    var data_ini = aktualna_data.getFullYear() + '-' + mies + '-' + dzien;
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prevYear,prev,next,nextYear today',
        center: '',
        right: 'title'
      },
      initialDate: data_ini,
      navLinks: true, // can click day/week names to navigate views
      editable: false,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        <?php //echo $events; 
        foreach ($events as $event) {
          echo "{
      title:'" . $event['title'] . "',
      start:'" . $event['Data'] . "',
      id:'" . $event['id'] . "'
    },";
        }
        ?>

      ]
    });

    calendar.render();
  });
</script>
<style>
  #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }
</style>

@endsection

@section('content')

<div id='calendar'></div>
<div class="container">
  <div class="row">
    <a href="{{ route('addEvent') }}" class="btn btn-primary btn-lg m-3" role="button">Dodaj wydarzenie</a>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"></div>
        <h5 class="modal-title" id="exampleModalLabel">Czy chcesz edytować wydarzenie?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="ModalForm" method="POST" action="{{ route('editEvent') }}">
          @csrf
          <div class="form-group">
            <input class="form-control idEvent" type="hidden" id="idEvent" name="idEvent" placeholder="Readonly input here…" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Tytuł wydarzenia:</label>
            <input class="form-control message-text" id="message-text" name="message-text" placeholder="Readonly input here…" readonly>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nie</button>
        <button type="submit" class="btn btn-primary">Tak</button>
      </div>
      </form>



    </div>
  </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Czy chcesz usunać wydarzenie?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="ModalForm" method="POST" action="{{ route('event.delete.custom') }}">
          @csrf
          <div class="form-group">
            <input class="form-control idEvent" type="hidden" id="idEvent" name="idEvent" placeholder="Readonly input here…" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Tytuł wydarzenia:</label>
            <input class="form-control message-text" id="message-text" name="message-text" placeholder="Readonly input here…" readonly>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nie</button>
        <button type="submit" class="btn btn-primary">Tak</button>
      </div>
      </form>



    </div>
  </div>
</div>


<script src="{{ asset('js/event.js') }}" defer></script>
@endsection