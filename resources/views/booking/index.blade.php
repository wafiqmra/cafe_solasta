@extends('home.layout')
@section('booking')
    <div id="container">
        <form action="{{ route('booking.store') }}" method="post">
            @csrf
            <div class="input-container" style="left: 220px; top: 270px;">
                <label for="party_size">Party Size:</label>
                <input type="number" id="party_size" name="party_size">
            </div>

            <div class="input-container" style="left: 589px; top: 270px;">
                <label for="tanggal">Booking Date:</label>
                <input type="date" id="tanggal" name="tanggal">
            </div>

            <div class="input-container" style="left: 958px; top: 270px;">
                <label for="waktu">Booking Time:</label>
                <input type="time" id="waktu" name="waktu">
            </div>

            <div class="input-container" style="left: 220px; top: 400px;">
                <label for="nama">Name:</label>
                <input type="text" id="nama" name="nama">
            </div>

            <div class="input-container" style="left: 589px; top: 400px;">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </div>

            <div class="input-container" style="left: 958px; top: 400px;">
                <label for="noTelp">Phone Number:</label>
                <input type="text" id="noTelp" name="noTelp">
            </div>

            <button type="submit" id="reserve-now">Reserve Now</button>
        </form>
        
        <div id="reservation-title">
            <p>Make a Reservation</p>
        </div>

        <div id="separator"></div>
    </div>
@endsection