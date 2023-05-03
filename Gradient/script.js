function updateGradient() {
 var color1 = document.getElementById(
  "color1").value;
 var color2 = document.getElementById(
  "color2").value;
 var angle = document.getElementById(
  "angle").value;
 console.log("update: " + color1 +
  "/" +
  color2 + " & " + angle + "deg");
 setGradient(color1, color2, angle);
}

function setGradient(color1, color2,
 angle) {
 var gradient = document.getElementById(
  "gradient");
 var gradientCode = "linear-gradient(" +
  angle + "deg, " +
  color1 + ", " +
  color2 + ")";
 gradient.style.background =
  gradientCode;
 
 
 var code = document.getElementById(
  "code");
 code.innerHTML =
  `
  background: linear-gradient(` +
  angle + "deg, " + color1 + ", " +
  color2 +
  `); <br>
`
}

function copyCode() {
 var range = document.createRange();
 range.selectNode(document
  .getElementById(
   "code"));
 window.getSelection().removeAllRanges();
 window.getSelection().addRange(range);
 document.execCommand("copy");
 window.getSelection().removeAllRanges();
 console.log("Code copied");
 alert("Copied to clipboard!");
}

function setup() {
 var color1 = "#E0FFFF";
 var color2 = "#87CEEB";
 document.getElementById(
  "color1").value = color1;
 document.getElementById(
  "color2").value = color2;
 
 var angle = 90;
 document.getElementById("angle").value =
  angle;
 
 setGradient(color1, color2, angle);
}

setup();