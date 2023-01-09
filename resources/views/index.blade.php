@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Coding Assignment KA</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/flight/create') }}" class="btn btn-success btn-sm" title="Add New Flight">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add new flight
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nr.</th>
                                        <th>Departure Airport</th>
                                        <th>Arrival Airport</th>
                                        <th>Timezone</th>
                                        <th>Airplane Capacity</th>
                                        <th>Departure Time</th>
                                        <th>Arrival Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($flights as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->departureAirport }}</td>
                                        <td>{{ $item->arrivalAirport }}</td>
                                        <td>{{ $item->timezone }}</td>
                                        <td>{{ $item->capacity }}</td>
                                        <td>{{ $item->departureTime}}</td>
                                        <td>{{ $item->arrivalTime }}</td>
                                        <td>
                                            <a href="{{ url('/flight/' . $item->id) }}" title="View Flight"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/flight/' . $item->id . '/edit') }}" title="Edit Flight"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/flight' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Flight" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection