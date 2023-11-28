@extends('layouts.layout')

@section('title')
AM. | Show Flight
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Flight</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('flights.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Reference:</strong>
            {{ $flight->reference }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Brand:</strong>
            {{ $flight->brand }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Capacity:</strong>
            {{ $flight->capacity }}
        </div>
    </div>
</div>
@endsection