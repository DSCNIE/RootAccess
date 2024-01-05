async function getReports(userId) {
  try {
    var response = await fetch(`http://localhost:5000/reports/${userId}`, {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    });

    if (response.ok) {
      var reports = await response.json();
      console.log(reports);
    } else {
      console.error("Failed to fetch the reports.");
    }
  } catch (error) {
    console.error("Error:", error);
    alert("Failed to fetch the reports.");
  }
}

getReports(566); // Replace 566 with the actual user ID
