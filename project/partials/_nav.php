<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5VKnvuvL46rld1kEqcL3KI5I3s7h3OISbYBuvHNoFoBb4ktkR5tfw5Sloj3Xl" crossorigin="anonymous">
  <title>Styled Links with Images</title>

  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-image: url('pexels-johannes-plenio-1103970.jpg');
      background-size: cover;
      background-position: center;
    }
    .btn-primary {
      background-color: white;
      border-color: black;
      color: white;
      border-radius: 20px;
    }

    .btn-primary:hover {
      background-color: black;
      color: white;
    }

    .link-button {
      color: black;
      transition: color 0.3s;
    }

    .link-button:hover {
      color: white;
    }

    .button-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    img {
      width: 500px;
      height: auto;
      margin: 10px;
      border-radius: 15px;
    }
  </style>
</head>

<body>

  <div class="button-container">
    <a href="choose.php">
      <img src="WhatsApp Image 2023-12-31 at 12.05.21 PM.jpeg" alt="Image 1">
    </a>
    <a class="btn btn-primary link-button" href="choose.php">Health Care</a>
  </div>
  <div class="button-container">
    <a href="choose1.php">
      <img src="WhatsApp Image 2023-12-31 at 12.05.21 PM (2).jpeg" alt="Image 2">
    </a>
    <a class="btn btn-primary link-button" href="choose1.php">Home workers</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-EV6ISpbj7pJ7/ZtfeDaqPbN8JS6Ob5t0agxzEQpIBR9XMz1dEPhh7z4+/en9P3Tl" crossorigin="anonymous"></script>
</body>

</html>
