@extends('layouts.layout')

@section('title')
AM. | Show Airport
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Airport</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('airports.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $airport->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>City:</strong>
            {{ $airport->city }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Reference:</strong>
            {{ $airport->reference }}
        </div>
    </div>
</div>
@endsection