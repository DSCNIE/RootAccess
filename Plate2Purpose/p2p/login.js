$(document).ready(function () {
  $("#login-btn").click(function (e) {
    e.preventDefault(); // Prevent the default behavior of the link

    var email = $("#email").val();
    var password = $("#password").val();

    if (email !== "" && password !== "") {
      // Check if the entered email and password match the predefined values
      if (email === "yashdivyapatna@gmail.com" && password === "P2P") {
        window.location.href = "index.html";
      } else {
        alert("Incorrect Email or Password");
      }
    } else {
      alert("Both fields are required");
    }
  });

  $("#login-as-Organisation").click(function (e) {
    e.preventDefault(); // Prevent the default behavior of the link

    var email = $("#email").val();
    var password = $("#password").val();

    if (email !== "" && password !== "") {
      // Check if the entered email and password match the predefined values
      if (email === "yashdivyapatna@gmail.com" && password === "P2P") {
        window.location.href = "feedingforward2.html";
      } else {
        alert("Incorrect Email or Password");
      }
    } else {
      alert("Both fields are required");
    }
  });
});
