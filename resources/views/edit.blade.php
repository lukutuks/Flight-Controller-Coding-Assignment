@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Flight</div>
  <div class="card-body">
      
      <form action="{{ url('flight/' .$flights->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$flights->id}}" id="id" />
        <label>Departure Airport</label></br>
        <input type="text" name="departureAirport" id="departureAirport"  value="{{$flights->departureAirport}}" class="form-control"></br>
        <label>Arrival Airport</label></br>
        <input type="text" name="arrivalAirport" id="arrivalAirport" value="{{$flights->arrivalAirport}}" class="form-control"></br>
        <label>Timezone</label></br>
        <input type="text" name="timezone" id="timezone" value="{{$flights->timezone}}" class="form-control"></br>
        <label>Airplane Capacity</label></br>
        <input type="text" name="capacity" id="capacity" value="{{$flights->capacity}}" class="form-control"></br>
        <label>Departure Time</label></br>
        <input type="text" name="departureTime" id="departureTime" value="{{$flights->departureTime}}" class="form-control"></br>
        <label>Arrival Time</label></br>
        <input type="text" name="arrivalTime" id="arrivalTime" value="{{$flights->arrivalTime}}" class="form-control"></br>

      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop