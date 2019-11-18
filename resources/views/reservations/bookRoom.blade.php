@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Clientes/Reservas</h4>
        <div class="medium-2  columns">RESERVAR PARA:</div>
        <div class="medium-2  columns"><b>Jose Arenas</b></div>
        <form action="" method="post">
        <input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53">
          <div class="medium-1  columns">DESDe:</div>
          <div class="medium-2  columns"><input name="dateFrom" value="" type="text" class="datepicker" /></div>
          <div class="medium-1  columns">HASTA:</div>
          <div class="medium-2  columns"><input name="dateTo" value="" type="text" class="datepicker" /></div>
          <div class="medium-2  columns"><input class="button" type="submit" value="SEARCH" /></div>
        </form>

        <table class="stack">
          <thead>
            <tr>
              <th width="200">Habitación</th>
              <th width="200">Disponibilidad</th>
              <th width="200">Acción</th>
            </tr>
          </thead>
          <tbody>
                      <tr>
              <td>101</td>
              <td>
                <div class="callout success">
                    <h7>Disponible</h7>
                </div>
              </td>
              <td>
                            </td>
            </tr>
                      <tr>
              <td>102</td>
              <td>
                <div class="callout success">
                    <h7>Disponible</h7>
                </div>
              </td>
              <td>
                            </td>
            </tr>
                      <tr>
              <td>201</td>
              <td>
                <div class="callout success">
                    <h7>Disponible</h7>
                </div>
              </td>
              <td>
                            </td>
            </tr>
                      <tr>
              <td>202</td>
              <td>
                <div class="callout success">
                    <h7>Disponible</h7>
                </div>
              </td>
              <td>
                            </td>
            </tr>
                    </tbody>
        </table>
      </div>
    </div>
@endsection