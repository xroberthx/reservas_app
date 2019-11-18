@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Nuevo Cliente</h4>
        <form action="/clients/new" method="post">
          <div class="medium-4  columns">
            <label>Títutlo</label>
            <select name="form[title]">
                          <option value="mr" selected="selected">Sr.</option>
                          <option value="ms">Sra.</option>
                          <option value="dr">Dr.</option>
                        </select>
          </div>
          <div class="medium-4  columns">
            <label>Nombre</label>
            <input name="form[name]" type="text">
          </div>
          <div class="medium-4  columns">
            <label>Apellidos</label>
            <input name="form[lastName]" type="text">
          </div>
          <div class="medium-8  columns">
            <label>Dirección</label>
            <input name="form[address]" type="text">
          </div>
          <div class="medium-4  columns">
            <label>ZIP</label>
            <input name="form[zipCode]" type="text">
          </div>
          <div class="medium-4  columns">
            <label>Ciudad</label>
            <input name="form[city]" type="text">
          </div>
          <div class="medium-4  columns">
            <label>Estado</label>
            <input name="form[state]" type="text">
          </div>
          <div class="medium-12  columns">
            <label>Correo</label>
            <input name="form[email]" type="text">
          </div>
          <div class="medium-12  columns">
            <input value="GUARDAR" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
@endsection