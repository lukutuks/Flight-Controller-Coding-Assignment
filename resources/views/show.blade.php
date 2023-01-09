@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Flights</div>
  <div class="card-body">
  
        <div class="card-body">
        <p class="card-text">Departure Airport : {{ $flights->departureAirport }}</p>
        <p class="card-text">Arrival Airport : {{ $flights->arrivalAirport }}</p>
        <p class="card-text">Timezone : {{ $flights->timezone }}</p>
        <p class="card-text">Capacity : {{ $flights->capacity }}</p>
        <p class="card-text">Departure Time : {{ $flights->departureTime }}</p>
        <p class="card-text">Arrival Time : {{ $flights->arrivalTime }}</p>
  </div>
      
    </hr>
  
  </div>
</div>