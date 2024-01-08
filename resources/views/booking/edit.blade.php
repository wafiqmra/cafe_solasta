<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Edit Booking</title>

    <style>
        body {
            margin: 0;
            padding: 0;
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
            top: 600px;
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
            top: 180px;
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
            width: 854px;
            height: 0px;
            left: 266px;
            top: 230px;
            position: absolute;
            mix-blend-mode: darken;
            border: 1px black solid;
        }
    </style>
</head>
<body>
    <div id="container">
        <div class="black-box" style="width: 27px; height: 22px; left: 30px; top: 34px; position: absolute;"></div>
        
        <div id="logo">LOGO WEB</div>
    
        <form action="{{ route('booking.update', ['booking' => $booking]) }}" method="post">
            @csrf
            @method('put')
            <div class="input-container" style="left: 220px; top: 390px;">
                <label for="party_size">Party Size:</label>
                <input type="number" id="party_size" name="party_size" value="{{ $booking->party_size }}">
            </div>

            <div class="input-container" style="left: 589px; top: 390px;">
                <label for="tanggal">Booking Date:</label>
                <input type="date" id="tanggal" name="tanggal" value="{{ $booking->tanggal }}">
            </div>

            <div class="input-container" style="left: 958px; top: 390px;">
                <label for="waktu">Booking Time:</label>
                <input type="time" id="waktu" name="waktu" value="{{ $booking->waktu }}">
            </div>

            <div class="input-container" style="left: 220px; top: 500px;">
                <label for="nama">Name:</label>
                <input type="text" id="nama" name="nama" value="{{ $booking->nama }}">
            </div>

            <div class="input-container" style="left: 589px; top: 500px;">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="{{ $booking->email }}">
            </div>

            <div class="input-container" style="left: 958px; top: 500px;">
                <label for="noTelp">Phone Number:</label>
                <input type="text" id="noTelp" name="noTelp" value="{{ $booking->noTelp }}">
            </div>

            <button type="submit" id="reserve-now">Update Reservation</button>
        </form>
        
        <div id="reservation-title">
            <p>Edit Reservation</p>
        </div>

        <div id="separator"></div>
    </div>
</body>
</html>
