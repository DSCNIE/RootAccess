function showInfo() {
  var infoBox = document.createElement("div");
  infoBox.className = "box-info";
  infoBox.innerHTML = "Here is some additional information!";
  document.body.appendChild(infoBox);
}

function hideInfo() {
  var infoBox = document.querySelector(".box-info");
  if (infoBox) {
    infoBox.parentNode.removeChild(infoBox);
  }
}
