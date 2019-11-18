@extends('layouts.app')

@section('content')
<div class="row">
	<div class="medium-12 large-12 columns">
		<h4>Clientes</h4>
		<div class="medium-2  columns"><a class="button hollow success" href="{{route('new_client')}}">NUEVO CLIENTE</a></div>

		<table class="stack">
			<thead>
				<tr>
					<th width="200">Nombre</th>
					<th width="200">Correo</th>
					<th width="200">Acción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($clients as $client)
				<tr>
					<td>{{ $client->title }} {{ $client->name }} {{ $client->lastname }}</td>
					<td>{{ $client->email }}</td>
					<td>
						<a class="hollow button" href="{{ route('show_client', ['client_id' => $client->id])}}">EDITAR</a>
						<a class="hollow button warning" href="{{ route('check_room', ['client_id' => $client->id])}}">RESERVAR CUARTO</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>		
	</div>
</div>
@endsection