<!-- resources/views/home/index.blade.php -->

@extends('home.layout')

@section('pastries')
    @foreach($pastries as $pastry)
        <div class="pastry">
            @if($pastry->id === 1)
                <div class="pastry-content1">
                    <img src="{{ asset('images/lemon.jpeg') }}" alt="Lemon Pastry">
                    <h3>{{ $pastry->pastry_name }}</h3>
                    <p>Price: Rp {{ $pastry->price }}</p>
                </div>
            @elseif($pastry->id === 2)
                <div class="pastry-content2">
                    <img src="{{ asset('images/pink.jpeg') }}" alt="Strawberry Pastry">
                    <h3>{{ $pastry->pastry_name }}</h3>
                    <p>Price: Rp {{ $pastry->price }}</p>
                </div>
            @elseif($pastry->id === 3)
                <div class="pastry-content3">
                    <img src="{{ asset('images/croissant.jpeg') }}" alt="Strawberry Pastry">
                    <h3>{{ $pastry->pastry_name }}</h3>
                    <p>Price: Rp {{ $pastry->price }}</p>
                </div>
            @endif
        </div>
    @endforeach
@endsection
