<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_vbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];
    $nation = $_POST["nation"];
    $state = $_POST["state"];
    $age = $_POST["age"];
    $emailaddress = $_POST["emailaddress"];
    $work = $_POST["work"];
    $lice = $_POST["lice"];
    $oth = $_POST["oth"];
    $exists = false;
    if ($exists == false) {
        $sql = "INSERT INTO srujans2 (username, password, mobile, nation, state, age, emailaddress, work, lice, oth) VALUES ('$username', '$password', '$mobile', '$nation', '$state', '$age', '$emailaddress', '$work', '$lice', '$oth');";
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
            background-image: url('WhatsApp Image 2024-01-04 at 12.30.01_15a298df.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
    background-color: rgba(225, 225, 225, 0.7); 
    backdrop-filter: blur(10px);
    border: 2px solid black; 
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 80%; 
    max-width: 600px; 
}



        .form-control {
            border-radius: 200px; 
        }


        .btn-primary {
            background-color: transparent; 
            border-color: black; 
            color: black;
            border-radius: 20px; 
            transition: background-color 0.3s, color 0.3s; 
        }

        .btn-primary:hover {
            background-color: black; 
            color: white; 
        }


    </style>
</head>

<body>
    <div class="form-container">
        <h1 class="mb-4">Personal Form</h1>
        <form action="/project/healthy1.php" method="post" enctype="multipart/form-data">
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
                <div class="d-flex">
                    <label for="work" class="form-label">Describe your work</label>
                    <input type="tel" class="form-control ms-2" id="work" name="work">
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label for="lice" class="form-label">Upload licence image</label>
                    <input type="tel" class="form-control ms-2" id="lice" name="lice">
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label for="oth" class="form-label">Oth</label>
                    <input type="tel" class="form-control ms-2" id="oth" name="oth">
                </div>
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
                <a class="btn btn-primary link-button" href="checks.php">Check orders</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        function toggleAddress() {
            var addressSection = document.getElementById("addressSection");
            addressSection.style.display = addressSection.style.display === "none" ? "block" : "none";
        }
    </script>
</body>

</html>
