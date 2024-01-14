document.addEventListener('DOMContentLoaded', function () {
    // ...

    document.getElementById('submitRatingBtn').addEventListener('click', function () {
        // Handle the submission of dish ratings
        const ratings = collectDishRatings(dishes);
        // Send the ratings data to the backend using AJAX or Fetch API
        // Display success message or handle errors
    });

    document.getElementById('catererForm').addEventListener('submit', function (event) {
        event.preventDefault();
        generateCatererQRCode();
    });
});

function generateCatererQRCode() {
    const dishListInput = document.getElementById('dishList');
    const catererQRCodeContainer = document.getElementById('catererQRCodeContainer');

    // Get the text from the input
    const dishList = dishListInput.value;

    // Create QR code instance
    const qrCode = new QRCode(-1, QRCode.CorrectLevel.H);
    qrCode.addData(dishList);
    qrCode.make();

    // Get QR code image data URI
    const qrCodeImageUrl = qrCode.createDataURL();

    // Display the generated QR code in the catererQRCodeContainer
    catererQRCodeContainer.innerHTML = `<img src="${qrCodeImageUrl}" alt="Caterer's QR Code">`;
}
