document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('button[type="button"]').addEventListener('click', function () {
        submitPlateOptimiserForm();
    });
});

function submitPlateOptimiserForm() {
    const dayOfWeek = document.getElementById('dayOfWeek').value;
    const platesShort = parseInt(document.getElementById('platesShort').value, 10);
    const platesExcess = parseInt(document.getElementById('platesExcess').value, 10);

    // Prepare the data to be sent to the server
    const data = {
        dayOfWeek: dayOfWeek,
        platesShort: platesShort,
        platesExcess: platesExcess,
    };

    // Make a POST request to the server
    fetch('http://localhost:5000/api/save-data', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(responseData => {
        // Process the server response (responseData)
        // Update the weekly report container or handle success/error messages
        document.getElementById('weeklyReportContainer').innerHTML = `Weekly Report: ${responseData.weeklyAverages.averagePlatesShort.toFixed(2)} plates short, ${responseData.weeklyAverages.averagePlatesExcess.toFixed(2)} plates in excess`;
    })
    .catch(error => {
        console.error('Error submitting form:', error);
        // Handle errors, show an error message, etc.
    });
}
