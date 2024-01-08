<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Booking</title>
    
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap");
        body {
            margin: 0;
            padding: 0;
            font-family: 'Cormorant Garamond', sans-serif;
        }

        div {
            box-sizing: border-box;
        }

        #container {
            width: 100%;
            height: 100%;
            position: relative;
            background: white;
        }

        .black-box {
            background: black;
        }

        #logo {
            width: 273px;
            height: 27px;
            left: 487px;
            top: 44px;
            position: absolute;
            text-align: center;
            color: black;
            font-size: 20px;
            font-family: Nunito;
            font-weight: 400;
            letter-spacing: 2px;
            word-wrap: break-word;
        }

        .input-container {
            width: 262px;
            position: absolute;
            background: linear-gradient(-135deg, #fff, #fda488);
            border-radius: 10px;
            border: 2px solid #ccc;
            padding: 8px;
            box-sizing: border-box;
        }


        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #333;
        }

        input {
            width: calc(100% - 16px);
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 8px;
            box-sizing: border-box;
        }

        #reserve-now {
            width: 257px;
            height: 60px;
            position: absolute;
            top: 460px;
            left: 50%;
            transform: translateX(-50%); 
            background: url('orangeaura.jpg') center/cover no-repeat;
            box-shadow: 4px 8px 12px rgba(78, 99, 141, 0.06);
            border-radius: 80px;
            border: 1px solid #ccc;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            margin: 200px 0px 0px 0px;
        }

        #reserve-now p {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
        }

        #reservation-title {
            width: 350px;
            left: 545px;
            top: 30px;
            position: absolute;
            mix-blend-mode: darken;
            text-align: center;
            padding: 10px;
            box-sizing: border-box;
        }

        #reservation-title p {
            margin: 0;
            font-size: 30px;
            font-weight: bold;
            color: black;
        }

        #separator {
            color: #fda488;
            width: 854px;
            height: 0px;
            left: 266px;
            top: 80px;
            position: absolute;
            mix-blend-mode: darken;
            border: 1px black solid;
        }
    </style>
</head>
<body>
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
</body>
</html>
