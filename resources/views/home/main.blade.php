@extends('home.layout')
@section('content')
    <div class="container">
        <p class="text">Selamat Datang di <span class="highlight">Solasta</span>!</p>
    </div>
    <section class="image-section1">
        <img src="{{ asset('images/lemon.jpeg') }}" alt="lemon">
        <p>Tempat terbaik untuk menikmati  <br>
            berbagai macam <em>pastry</em></p>
    </section>
    <section class="image-section2">
        <img src="{{ asset('images/strawberry.jpeg') }}" alt="strawberry">
        <p>Selalu membawa <br>
        kehangatan</p>
    </section>
    <section class="image-section3">
        <img src="{{ asset('images/bread.jpeg') }}" alt="bread" >
    </section>
    <section class="image-section4">
        <img src="{{ asset('images/afternoon.jpeg') }}" alt="bread" >
    </section>
    <section class="image-section5">
        <img src="{{ asset('images/view.jpeg') }}" alt="bread" >
    </section>
@endsection