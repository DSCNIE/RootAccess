<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-image: url('WhatsApp Image 2024-01-04 at 15.14.38_510c786c.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .form-container {
      max-width: 400px;
      width: 100%;
      padding: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: rgba(255, 255, 255, 0.8); 
      border-radius: 10px;
    }

    .form-control {
      border-radius: 5px;
    }

    .btn-primary {
      background-color: black;
      border: 2px solid white;
      color: white;
      width: 100%;
      border-radius: 10px;
      margin-top: 10px; 
      transition: background-color 0.3s, border-color 0.3s, color 0.3s;
      font-size: 24px;
      text-align: center;
      cursor: pointer;
    }

    .button-container {
      display: flex;
      margin-top: 10px;
      gap: 10px;
    }

    .link-button {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    

    .btn-primary:hover {
      transform: scale(1.1);
      transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
    }
  </style>

  <title>Signup</title>
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <div class="button-container">
    <a class="btn btn-primary link-button" href="#">Call Police</a>
    <a class="btn btn-primary link-button" href="#">Call Ambulance</a>
    <a class="btn btn-primary link-button" href="#">Call to Home</a>
  </div>

</body>

</html>
