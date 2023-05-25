@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-wrap text-center">
        @foreach ($trains as $train)
            <div class="card" style="width: 210px; margin: 10px">
                <div class="card-body">
                    <h5 class="card-title">{{ $train->company }}</h5>
                    <p class="card-text">Departure Station: {{ $train->departure_station }}</p>
                    <p class="card-text">Departure Time: {{ $train->departure_time }}</p>
                    <p class="card-text">Arrival Station: {{ $train->arrival_station }}</p>
                    <p class="card-text">Estimated time of Arrival: {{ $train->arrival_time }}</p>
                    <p class="card-text">Train Code: {{ $train->train_code }}</p>
                    <p class="card-text">Train wagons: {{ $train->wagons_n }}</p>
                    <p class="card-text">On Time: {{ $train->on_time }}</p>
                    <p class="card-text">Delayed: {{ $train->delayed }}</p>
                    <p class="card-text">Cancelled: {{ $train->cancelled }}</p>
                </div>
            </div>
        @endforeach
    </div>      
@endsection