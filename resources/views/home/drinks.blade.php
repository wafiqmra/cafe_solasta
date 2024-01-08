@extends('home.layout')
@section('drinks')
    @foreach($drinks as $drink)
    <div class="drinks">
                @if($drink->id === 1)
                    <div class="drinks-content1">
                        <img src="{{ asset('images/tiramisu.jpeg') }}">
                        <h3>{{ $drink->drinks_name }}</h3>
                        <p>Price: Rp {{ number_format($drink->price, 0, ',', '.') }}</p>
                    </div>
                    @elseif($drink->id === 2)
                    <div class="drinks-content2">
                        <img src="{{ asset('images/americano.jpeg') }}">
                        <h3>{{ $drink->drinks_name }}</h3>
                        <p>Price: Rp {{ number_format($drink->price, 0, ',', '.') }}</p>
                    </div>
                    @elseif($drink->id === 3)
                    <div class="drinks-content3">
                        <img src="{{ asset('images/mango.jpeg') }}">
                        <h3>{{ $drink->drinks_name }}</h3>
                        <p>Price: Rp {{ number_format($drink->price, 0, ',', '.') }}</p>
                    </div>
                @endif
            </div>
    @endforeach
@endsection