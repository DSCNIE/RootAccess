<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

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
      background-repeat: no-repeat;
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
      border-color: #000;
      color: #000;
      border-radius: 20px;
      transition: background-color 0.3s, border-color 0.3s, color 0.3s;
    }

    .btn-primary:hover {
      background-color: #000;
      color: #fff;
    }

    .dropdown {
      margin-top: 10px;
    }

    .dropdown-menu a.dropdown-item {
      color: #000;
      transition: background-color 0.3s, color 0.3s;
    }

    .dropdown-menu a.dropdown-item:hover {
      background-color: #000;
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="container form-container">
    <h1 class="mb-4">Find Health service</h1>
    <form>
      <div class="button-container">

        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Doctor
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="card.php">Cardiologist</a></li>
            <li><a class="dropdown-item" href="#">Option 2</a></li>
            <li><a class="dropdown-item" href="#">Option 3</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Therapist
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Option 1</a></li>
            <li><a class="dropdown-item" href="#">Option 2</a></li>
            <li><a class="dropdown-item" href="#">Option 3</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nurse
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item" href="#">Option 1</a></li>
            <li><a class="dropdown-item" href="#">Option 2</a></li>
            <li><a class="dropdown-item" href="#">Option 3</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton3"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Diagnostic Center
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
            <li><a class="dropdown-item" href="#">Option 1</a></li>
            <li><a class="dropdown-item" href="#">Option 2</a></li>
            <li><a class="dropdown-item" href="#">Option 3</a></li>
          </ul>
        </div>
      </div>
    </form>
  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
