@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Update Flights</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('flights.index') }}"> Back</a>
        </div>
    </div>
</div>
<form action="{{ route('flights.update',$flight->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Airports:</strong>

                <select name="airport_id" id="cars">
                    @foreach ($airports as $airport )
                    @if ($airport->id==$flight->airport->id)
                    <option value="{{$airport->id}}" selected>{{ $airport->name}}</option>
                    @else
                    <option value="{{$airport->id}}">{{ $airport->name}}</option>
                    @endif
                    @endforeach
                </select>


            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection