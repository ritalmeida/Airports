@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Flights</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('flights.index') }}"> Create New flight</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Reference</th>
        <th>Brand</th>
        <th>Capacity</th>
        <th>Airport ID</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($flights as $flight)
    <tr>
        <td>{{ $flight->id }}</td>
        <td>{{ $flight->reference }}</td>
        <td>{{ $flight->brand }}</td>
        <td>{{ $flight->capacity }}</td>
        <td>{{ $flight->airport->name }}</td>
        <td>
            <form action="{{ route('flights.destroy',$flight->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('flights.show',$flight->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('flights.edit',$flight->id) }}">Edit</a>
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection