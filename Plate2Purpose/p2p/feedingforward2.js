// Function to create and append a data box
function createDataBox(data) {
  const dataBox = document.createElement("div");
  dataBox.className = "data-box";
  dataBox.innerHTML = `<p><strong>Name:</strong> ${data.name}</p>
                      <p><strong>No. of plates:</strong> ${data.foodQuantity}</p>
                      <p><strong>Address:</strong> ${data.address}</p>
                      <p><strong>Phone Number:</strong> ${data.phoneNumber}</p>`;
  document.getElementById("dataContainer").appendChild(dataBox);
}

// Function to save form data to localStorage
function saveFormData(formData) {
  // Retrieve any existing data from localStorage
  const storedFormData = JSON.parse(localStorage.getItem("formData")) || [];
  // Add the new data entry
  storedFormData.push(formData);
  // Save the updated array back to localStorage
  localStorage.setItem("formData", JSON.stringify(storedFormData));
}

// Event listener for form submission
document
  .getElementById("feedingForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Retrieve form values
    const name = document.getElementById("name").value;
    const foodQuantity = document.getElementById("foodQuantity").value;
    const address = document.getElementById("address").value;
    const phoneNumber = document.getElementById("phoneNumber").value;

    // Save the data to localStorage
    saveFormData({ name, foodQuantity, address, phoneNumber });

    // Create and append the data box
    createDataBox({ name, foodQuantity, address, phoneNumber });

    // Clear the form inputs
    document.getElementById("name").value = "";
    document.getElementById("foodQuantity").value = "";
    document.getElementById("address").value = "";
    document.getElementById("phoneNumber").value = "";
  });

// Function to load and display data from localStorage on page load
function loadData() {
  // Retrieve stored form data from localStorage
  const storedData = JSON.parse(localStorage.getItem("formData")) || [];
  // Create and append a data box for each stored data entry
  storedData.forEach(createDataBox);
}

// Load data when the page loads
window.onload = loadData;