<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

  <title>Health Form</title>

  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: url('WhatsApp Image 2024-01-04 at 12.28.25_a87e6ed3.jpg');
      background-size: cover;
      background-position: center;
    }

    .form-container {
      background-color: rgba(225, 225, 225, 0.7); 
    backdrop-filter: blur(10px);
    border: 2px solid black;  
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }

    .mb-3 {
      margin-bottom: 15px;
    }

    .form-label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 20px;
    }

    .btn-primary {
      background-color: transparent;
      border-color: #007bff;
      color: #007bff;
      border-radius: 20px;
    }

    .btn-primary:hover {
      background-color: black;
      color: white;
    }

    .link-button {
      color: #007bff;
      transition: color 0.3s;
    }

    .link-button:hover {
      color: white;
    }

    .btn-sos {
      background-color: red; 
      border-color: black; 
      color: white; 
      border-radius: 20px;
      transition: background-color 0.3s, color 0.3s; 
    }

    .btn-sos:hover {
      background-color: white; 
      color: black;
      border-color: black;
    }

    .button-container a {
      display: block;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container form-container">
    <h1 class="mb-4">Find Your service</h1>
    <form>
      <div class="button-container">
        <a class="btn btn-primary link-button" href="service.php">Health Service</a>
        <a class="btn btn-primary link-button" href="#">Home Service</a>
        <a class="btn btn-primary link-button" href="#">Health Loan</a>
        <a class="btn btn-sos" href="inter.php">SOS</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    function toggleAddress() {
      var addressSection = document.getElementById("addressSection");
      addressSection.style.display = addressSection.style.display === "none" ? "block" : "none";
    }
  </script>
</body>
</html>
