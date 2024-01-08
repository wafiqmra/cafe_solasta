<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Booking</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>

<body>
    <div class="address-text">Address</div>
    <div class="open-time-text">Open Time</div>
    <div class="background-box"></div>
    <div class="border-box"></div>

    <div class="details-text">Name: {{ $reservationData['nama'] }}</div>
    <div class="details-text email">Email: {{ $reservationData['email'] }}</div>
    <div class="details-text phone">Phone Number: {{ $reservationData['noTelp'] }}</div>
    <div class="details-text date">Date: {{ $reservationData['tanggal'] }}</div>
    <div class="details-text time">Time: {{ $reservationData['waktu'] }}</div>
    <div class="details-text party-size">Party Size: {{ $reservationData['party_size'] }}</div>

    <div class="additional-info-text">9.00 AM - 9.00 PM</div>
    <div class="location-text">Jl. Sukasenang IV<br />Bandung - Indonesia</div>
    <div class="thank-you-text">Thank you for booking!</div>
    <div class="reservation-details-text">Reservation details:</div>
    <form id="cancelForm" action="{{ route('booking.show', ['booking' => $reservationData['id']]) }}" method="post">
        @csrf
        @method('delete')
        <div class="cancel-reservation-btn" onclick="showCancelPopup()">Cancel Reservation</div>
    </form>

    <!-- Cancel Popup -->
    <div class="cancel-popup" id="cancelPopup">
        <div class="popup-content">
            <p>Are you sure you want to cancel the reservation?</p>
            <button class="confirm-btn" onclick="cancelReservation()">Yes, Cancel</button>
            <button class="cancel-btn" onclick="hideCancelPopup()">No, Keep Reservation</button>
        </div>
    </div>

    <script>
        var cancelPopupShown = false;

        function showCancelPopup() {
            if (!cancelPopupShown) {
                document.getElementById('cancelPopup').style.display = 'block';
                cancelPopupShown = true;
            }
        }

        function hideCancelPopup() {
            document.getElementById('cancelPopup').style.display = 'none';
        }

        function cancelReservation() {
            // Perform cancellation logic here (delete from database, etc.)
            alert('Reservation has been canceled.');
            // Redirect to index page
            window.location.href = '/booking';
        }
    </script>
    <div class="edit"><a href="{{ route('booking.edit', ['booking' => $reservationData['id']]) }}">Edit</a></div>
</body>

</html>