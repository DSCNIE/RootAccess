document.addEventListener('DOMContentLoaded', function () {
    // Additional initialization logic, if needed
});

function submitPlateOptimiserForm() {
    const dayOfWeek = document.getElementById('dayOfWeek').value;
    const platesShort = parseInt(document.getElementById('platesShort').value, 10);
    const platesExcess = parseInt(document.getElementById('platesExcess').value, 10);

    // Send the data to the server using AJAX or Fetch API
    // Process the server response and update the weekly report container
    // You can use the response to display the average values for plates short and in excess
    // Example: document.getElementById('weeklyReportContainer').innerHTML = `Weekly Report: ${response.averagePlatesShort} plates short, ${response.averagePlatesExcess} plates in excess`;
}
