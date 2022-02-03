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

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var aktualna_data = new Date();
    var mies=(aktualna_data.getMonth()+1<10) ? ('0'+(aktualna_data.getMonth()+1)) : (aktualna_data.getMonth()+1);
    var dzien=(aktualna_data.getDay()<10) ? ('0'+(aktualna_data.getDay())) : (aktualna_data.getDay());
    var data_ini = aktualna_data.getFullYear()+'-'+mies+'-'+dzien;  
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prevYear,prev,next,nextYear today',
        center: 'title',
        right: 'dayGridMonth,dayGridWeek,dayGridDay'
      },
      initialDate: data_ini,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2020-09-01'
        },
        {
          title: 'Long Event',
          start: '2020-09-07',
          end: '2020-09-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2020-09-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2020-09-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2020-09-11',
          end: '2020-09-13'
        },
        {
          title: 'Meeting',
          start: '2020-09-12T10:30:00',
          end: '2020-09-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2020-09-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2020-09-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2020-09-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2020-09-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2020-09-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2020-09-28'
        }
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

@endsection