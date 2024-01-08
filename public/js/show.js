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