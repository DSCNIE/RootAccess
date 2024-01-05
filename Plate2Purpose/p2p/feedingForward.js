document.getElementById('feedingForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const foodQuantity = document.getElementById('foodQuantity').value;

    // Send data to the backend using Fetch API
    fetch('/api/feeding-forward', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ foodQuantity }),
    })
    .then(response => response.json())
    .then(data => {
        // Handle the response as needed
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
