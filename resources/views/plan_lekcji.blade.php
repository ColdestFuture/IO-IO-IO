@extends('welcome')

@section('content')
<div class="container-xl">
<div class="container-sm">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Lp</th>
      <th scope="col">Godzina</th>
      <th scope="col">Poniedziałek</th>
      <th scope="col">Wtorek</th>
      <th scope="col">Środa</th>
      <th scope="col">Czwartek</th>
      <th scope="col">Piątek</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>7:00-7:45</td>
      <td>Polski</td>
      <td></td>
      <td>Matematyka</td>
      <td></td>
      <td>J. angielski</td>
    </tr>
    
    <tr>
    <td colspan="7"></td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>7:55-8:40</td>
      <td>Matematyka</td>
      <td>Polski</td>
      <td>W-F</td>
      <td>Religia</td>
      <td>Biologia</td>
    </tr>

    <tr>
    <td colspan="7"></td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>8:50-9:35</td>
      <td>Matematyka</td>
      <td>Geografia</td>
      <td>Polski</td>
      <td>W-F</td>
      <td>Polski</td>
    </tr>

    <tr>
    <td colspan="7"></td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>8:50-9:35</td>
      <td>J. angielski</td>
      <td>Matematyka</td>
      <td>Polski</td>
      <td>W-F</td>
      <td>Polski</td>
    </tr>

    <tr>
    <td colspan="7"></td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>8:50-9:35</td>
      <td>WDŻ</td>
      <td>Chemia</td>
      <td>Technika</td>
      <td></td>
      <td>Matematyka</td>
    </tr>
  </tbody>
</table>
</div>
</div>
@endsection