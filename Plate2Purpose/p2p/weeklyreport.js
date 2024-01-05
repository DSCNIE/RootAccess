// Function to create and display a report dialog box
function createReportBox(userId, reportData) {
  const reportBox = document.createElement("div");
  reportBox.className = "report-box";
  reportBox.innerHTML = `<p><strong>Name:</strong> ${userId}</p>
                         <p><strong>Daily Average:</strong> ${reportData}</p>`;
  document.getElementById("weeklyReportContainer").appendChild(reportBox);
}

// Function to save report data to localStorage and display the report box
function submitReport() {
  const userId = document.getElementById("userId").value;
  const reportData = document.getElementById("reportData").value;

  // Save the report data to localStorage
  const reports = JSON.parse(localStorage.getItem("reports")) || [];
  reports.push({ userId, reportData });
  localStorage.setItem("reports", JSON.stringify(reports));

  // Create and display the report box
  createReportBox(userId, reportData);

  // Clear the form inputs
  document.getElementById("userId").value = "";
  document.getElementById("reportData").value = "";
}

// Function to load and display all reports from localStorage
function showReports() {
  const reports = JSON.parse(localStorage.getItem("reports")) || [];
  reports.forEach((report) =>
    createReportBox(report.userId, report.reportData)
  );
}

// Event listener for the "Show Report" button
document
  .getElementById("showReportButton")
  .addEventListener("click", submitReport);

// Load and display all reports when the page loads
window.onload = showReports;

// Function to calculate and display the weekly report
function calculateAndDisplayReport() {
  var totalWeight = 0;
  var count = 0;

  var daysOfWeek = [
    "monday",
    "tuesday",
    "wednesday",
    "thursday",
    "friday",
    "saturday",
    "sunday",
  ];

  for (var i = 0; i < daysOfWeek.length; i++) {
    var dayValue = parseInt(document.getElementById(daysOfWeek[i]).value);
    if (dayValue > 0) {
      totalWeight += dayValue;
      count++;
    }
  }

  var excessWeightPerDay = totalWeight / count;

  var content = `
          <p>Total number of plates this week is ${totalWeight} .</p>
          <p>There is ${excessWeightPerDay.toFixed(
            2
          )} excess plates per day.</p>
      `;

  document.getElementById("weeklyReportContainer").innerHTML = content;
}

// Function to redirect back to the main page
function goBack() {
  window.location.href = "index.html";
}