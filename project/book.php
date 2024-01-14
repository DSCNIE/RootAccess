<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Health Form</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

  <style>
    body {
      background-color: #f8f9fa;
      background-image: url('WhatsApp Image 2024-01-04 at 12.28.25_a87e6ed3.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 90%;
      text-align: center;
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
      border-color: transparent;
      color: #000;
      border-radius: 20px;
      transition: background-color 0.3s, color 0.3s;
    }

    .btn-primary:hover {
      background-color: rgba(0, 0, 0, 0.2);
      color: #fff;
    }

    .dropdown-menu .dropdown-item {
      border-radius: 50px;
    }
  </style>
</head>

<body>
  <div class="container form-container">
    <h1 class="mb-4">Pay here</h1>
    <form>
      <div class="mb-3">
        <button type="button" class="btn btn-primary phone-pay">Cash on hand</button>
      </div>
      <div class="mb-3">
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Pay using UPI
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item phone-pay" href="#">Phone Pay</a></li>
            <li><a class="dropdown-item google-pay" href="#">Google Pay</a></li>
            <li><a class="dropdown-item paytm" href="#">Paytm</a></li>
            <li><a class="dropdown-item whatsapp-pay" href="#">WhatsApp Pay</a></li>
          </ul>
        </div>
      </div>
      <div class="button-container">
        <a class="btn btn-primary link-button" href="#">Scan and pay</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
