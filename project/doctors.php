<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv"
        crossorigin="anonymous">
    <title>signup</title>
    <style>
        body {
            background-image: url('WhatsApp Image 2024-01-04 at 12.30.01_15a298df.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            background-color: transparent;
        }

        img {
            width: 150px;
            height: auto;
            margin: 10px;
        }

        .link-button {
            width: 150px;
            height: 40px;
            border-radius: 50px; 
            transition: background-color 0.3s, border-color 0.3s; 
            background-color:white;
            color: black;
            border: 2px solid black; 
            cursor: pointer;
            /* background: ; */
        }

        .link-button:hover {
            background-color: #000;
            color: #fff;
            border-color: #000; 
        }

        .dropdown-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>

<body>

    <div class="dropdown-container">
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Filter
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">by distance</a></li>
                <li><a class="dropdown-item" href="#">by experience</a></li>
                <li><a class="dropdown-item" href="#">by price</a></li>
            </ul>
        </div>
    </div>

    <div class="button-container">
        <img src="WhatsApp Image 2024-01-04 at 09.14.39_d89da8ea.jpg" alt="Image 1">
        <a class="btn btn-primary link-button" href="bio.php">plumber 1</a>
    </div>

    <div class="button-container">
        <img src="WhatsApp Image 2024-01-04 at 09.14.39_d89da8ea.jpg" alt="Image 2">
        <button class="link-button" href="#">plumber 2</button>
    </div>

    <div class="button-container">
        <img src="WhatsApp Image 2024-01-04 at 09.14.39_d89da8ea.jpg" alt="Image 3">
        <button class="link-button">plumber 3</button>
    </div>
    
    <div class="button-container">
        <img src="WhatsApp Image 2024-01-04 at 09.14.39_d89da8ea.jpg" alt="Image 3">
        <button class="link-button">plumber 4</button>
    </div>
    
    <div class="button-container">
        <img src="WhatsApp Image 2024-01-04 at 09.14.39_d89da8ea.jpg" alt="Image 3">
        <button class="link-button">plumber 5</button>
    </div>
    
    <div class="button-container">
        <img src="WhatsApp Image 2024-01-04 at 09.14.39_d89da8ea.jpg" alt="Image 3">
        <button class="link-button">plumber 6</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        
</body>


</html>
