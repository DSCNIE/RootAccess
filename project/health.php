<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $age = $_POST["age"];
    $emailaddress = $_POST["emailaddress"];
    $password = $_POST["password"];
    $nation = $_POST["nation"];
    $state = $_POST["state"];
    $mobile = $_POST["mobile"];
    $exists = false;
    if ($exists == false) {
        $sql = "INSERT INTO pro (username, age, emailaddress, password, nation, state, mobile) VALUES ('$username', '$age', '$emailaddress', '$password', '$nation', '$state', '$mobile');";
        $result = mysqli_query($conn, $sql);

        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv"
        crossorigin="anonymous">

    <title>Health Form</title>

    <style>
        body {
            background-image: url('WhatsApp Image 2024-01-04 at 12.28.25_a87e6ed3.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 800px;
            width: 100%;
        }

        .form-container {
            background-color: rgba(225, 225, 225, 0.7); 
    backdrop-filter: blur(10px);
    border: 2px solid black; 
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 48%;
            position: relative; 
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
      border-color: black;
      color: black;
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
            position: absolute;
            bottom: 20px;
            right: 20px;
            transition: right 0.3s ease; 
        }

        .button-container.open {
            right: 150px; 
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1 class="mb-4">Personal Form</h1>
            <form action="/project/health.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" name="age" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="emailaddress" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="emailaddress" name="emailaddress" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile">
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-primary" onclick="toggleAddress()">Address</button>
                </div>
                <div class="mb-3" id="addressSection" style="display: none;">
                    <label for="nation" class="form-label">Nation</label>
                    <input type="text" class="form-control" id="nation" name="nation">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" id="state" name="state">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary link-button">Submit</button>
                </div>
                <div class="button-container">
                    <a class="btn btn-primary link-button" href="find.php">Continue</a>
                </div>
            </form>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        function toggleAddress() {
            var addressSection = document.getElementById("addressSection");
            addressSection.style.display = addressSection.style.display === "none" ? "block" : "none";

           
            var buttonContainer = document.querySelector('.button-container');
            if (addressSection.style.display === "block") {
                buttonContainer.classList.add('open');
            } else {
                buttonContainer.classList.remove('open');
            }
        }
    </script>
</body>

</html>
