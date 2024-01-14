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
      background-image: url('WhatsApp Image 2024-01-04 at 12.28.25_a87e6ed3.jpg'); 
      background-size: cover;
      background-position: center;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .form-container {
      background-color: rgba(225, 225, 225, 0.7); 
    backdrop-filter: blur(10px);
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  margin: 20px auto;
  opacity: 1;
  transition: opacity 0.5s ease-in-out;
  height: 200px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  border-style:solid;
  border-color:black;
}


    .btn-primary {
      background-color: transparent;
      border-color: #007bff;
      color: #007bff;
      border-radius: 20px;
      transition: background-color 0.3s, color 0.3s, transform 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
      position: relative;
      overflow: hidden;
      margin-bottom: 10px;
      width: 150px;
      text-align: center;
      text-decoration: none;
      padding: 10px;
      cursor: pointer;
      align-items: center;
      border-style:solid;
      border-color:black;
      color:white;
      background:black;
    }
    .mb-4 {
        margin-top: 20px; 
        color:black;
    }

    .btn-primary:hover {
  color: #fff;
  transform: scale(1.1);
  background-color: black; 
}

    .col-md-6
    {
        color:black;
    }

    .btn-primary::after {
      content: '';
      position: absolute;
      background-color: rgba(255, 255, 255, 0.5);
      width: 10px;
      height: 10px;
      border-radius: 50%;
      animation: bubble 0.6s ease-out;
    }
    .container.form-container {
     background-color: transparent; 
    }

    .btn-primary:hover::after {
      animation: bubble 0.6s ease-out;
    }

    @keyframes bubble {
      0% {
        transform: scale(1);
        opacity: 1;
      }
      100% {
        transform: scale(2);
        opacity: 0;
      }
    }
  </style>
</head>

<body class="d-flex flex-column align-items-center justify-content-center vh-100">
  <div class="container form-container">
    <h1 class="mb-4">Choose</h1>
    <div class="row">
      <div class="col-md-6">
        <a class="btn btn-primary link-button d-block user-button" href="health.php">User</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-primary link-button d-block" href="health1.php">Worker</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.body.style.opacity = 1;
    });

    document.querySelector('.user-button').addEventListener('click', function (e) {
      const circle = document.createElement('span');
      const size = Math.max(this.clientWidth, this.clientHeight);
      const x = e.pageX - this.offsetLeft - size / 2;
      const y = e.pageY - this.offsetTop - size / 2;

      circle.style.width = circle.style.height = size + 'px';
      circle.style.left = x + 'px';
      circle.style.top = y + 'px';

      this.appendChild(circle);

      setTimeout(() => {
        circle.remove();
      }, 600);

      this.style.animation = 'bounce 0.5s ease';
      setTimeout(() => {
        this.style.animation = '';
      }, 500);
    });
  </script>
</body>

</html>
