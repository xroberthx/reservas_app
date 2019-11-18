@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>{{$modify == 1 ? "Editar Cliente" : "Nuevo Cliente"}}</h4>
        <form action="{{ $modify == 1 ? route('update_client', ['client_id' => $client_id]) : route('create_client') }}" method="post">
          <div class="medium-4  columns">
            <label>Títutlo</label>
            <select name="title" value="{{ $modify == 1 ? $title : ''}}">
                          <option value="Sr." selected="selected">Sr.</option>
                          <option value="Sra." >Sra.</option>
                          <option value="Dr.">Dr.</option>
                        </select>
          </div>
          <div class="medium-4  columns">
            <label>Nombre</label>
            <input name="name" type="text" value="{{ $modify == 1 ? $name : ''}}">
          </div>
          <div class="medium-4  columns">
            <label>Apellidos</label>
            <input name="last_name" type="text"value="{{ $modify == 1 ? $last_name : ''}}" >
          </div>
          <div class="medium-8  columns">
            <label>Dirección</label>
            <input name="address" type="text" value="{{ $modify == 1 ? $address : ''}}">
          </div>
          <div class="medium-4  columns">
            <label>ZIP</label>
            <input name="zip_code" type="text" value="{{ $modify == 1 ? $zip_code : ''}}">
          </div>
          <div class="medium-4  columns">
            <label>Ciudad</label>
            <input name="city" type="text" value="{{ $modify == 1 ? $city : ''}}">
          </div>
          <div class="medium-4  columns">
            <label>Estado</label>
            <input name="state" type="text" value="{{ $modify == 1 ? $state : ''}}">
          </div>
          <div class="medium-12  columns">
            <label>Correo</label>
            <input name="email" type="text" value="{{ $modify == 1 ? $email : ''}}">
          </div>
          <div class="medium-12  columns">
            <input value="GUARDAR" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
@endsection