@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            @foreach ($trains as $train) 
            <div class="card p-3 mb-3">
                <h5>{{ $train->company }}</h5>
                <h3>{{ $train->departure_station }} - {{ $train->arrival_station }}</h3>
                <h2>{{ $train->departure_time }} - {{ $train->arrival_time }}</h2>
                <h2>Train number: {{ $train->train_code }}</h2>
                <h2>Carriages: {{ $train->train_carriages }}</h2>
                
                @php 
                    if ($train->on_time == 0) { 
                        $train->on_time = "The train is on time";
                        echo $train->on_time;
                    } else {
                        $train->on_time = "The train is delayed";
                        echo $train->on_time;
                    }
                @endphp

                @php 
                    if ($train->deleted == 1) { 
                        $train->deleted = "The train was cancelled";
                        echo $train->deleted;
                    }
                @endphp
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection