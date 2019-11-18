@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Clientes/Reservas</h4>
        <div class="medium-2  columns">RESERVAR PARA:</div>
        <div class="medium-2  columns"><b>{{$client->title}} {{$client->name}} {{$client->last_name}}</b></div>
        <form action="" method="post">
        <input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53">
          <div class="medium-1  columns">DESDe:</div>
          <div class="medium-2  columns"><input name="dateFrom" value="{{$dateFrom}}" type="text" class="datepicker" /></div>
          <div class="medium-1  columns">HASTA:</div>
          <div class="medium-2  columns"><input name="dateTo" value="{{$dateTo}}" type="text" class="datepicker" /></div>
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
		  @unless( empty($dateFrom) || empty($dateTo) )
		  @foreach($rooms as $room)
            <tr>
              <td>{{ $room->name}}</td>
              <td>
                <div class="callout success">
                    <h7>Disponible</h7>
                </div>
              </td>
              <td>
				<a class="hollow button warning" href="{{ route('book_room', ['client_id' => $client->id, 'room_id' => $room->id, 
				'date_in' => $dateFrom, 'date_out' => $dateTo])}}"> RESERVAR</a>
              </td>
            </tr>
		   @endforeach
		   @endunless
           </tbody>
        </table>
      </div>
    </div>

@endsection