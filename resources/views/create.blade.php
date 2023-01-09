@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Flights Page</div>
  <div class="card-body">
      
      <form action="{{ url('flight') }}" method="post">
        {!! csrf_field() !!}
        <label>Departure Airport</label></br>
        <input type="text" name="departureAirport" id="departureAirport" class="form-control"></br>
        <label>Arrival Airport</label></br>
        <input type="text" name="arrivalAirport" id="arrivalAirport" class="form-control"></br>
        <label>Timezone</label></br>
        <input type="text" name="timezone" id="timezone" class="form-control"></br>
        <label>Airplane Capacity</label></br>
        <input type="text" name="capacity" id="capacity" class="form-control"></br>
        <label>Departure Time</label></br>
        <input type="text" name="departureTime" id="departureTime" class="form-control"></br>
        <label>Arrival Time</label></br>
        <input type="text" name="arrivalTime" id="arrivalTime" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop