<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Cafe</title>
      <link rel="stylesheet" href="{{ asset('css/main.css') }}">
      <link rel="stylesheet" href="{{ asset('css/home.css') }}">
      <link rel="stylesheet" href="{{ asset('css/pastry.css') }}">
      <link rel="stylesheet" href="{{ asset('css/drinks.css') }}">
      <link rel="stylesheet" href="{{ asset('css/show.css') }}">
      <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
   @yield('booking')
   <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
      </form>
      <input type="checkbox" id="active">
      <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
      <div class="wrapper">
         <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('pastries.index') }}">Pastries</a></li>
            <li><a href="{{ route('drinks.index') }}">Drinks</a></li>
            <li><a href="{{ route('booking.index') }}">Booking</a></li>
            <li><a href="#">About</a></li>
         </ul>
      </div>
      @yield('content')
      @yield('pastries')
      @yield('drinks')
      @yield('show')
   </body>
</html>