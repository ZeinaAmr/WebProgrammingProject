// Initialize flatpickr for the date and time input field
flatpickr("#bookingDateTime", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
});

function bookPhotographer(photographerId) {
    // Get the selected date and time
    var selectedDateTime = document.getElementById("bookingDateTime").value;

    // Add logic to handle the booking process, e.g., show a confirmation modal
    var photographerName = "Photographer " + photographerId;
    var message = "You have successfully booked " + photographerName + " for " + selectedDateTime + ".";

    document.getElementById("booking-message").innerHTML = message;
    openModal();
}

function openModal() {
    document.getElementById("booking-modal").style.display = "block";
}

function closeModal() {
    document.getElementById("booking-modal").style.display = "none";
}
