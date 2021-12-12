let rotating = true;
let angle = 0;
let angleAdd = 30;
let circle = document.getElementById("circle");
let rotInterval = setInterval(() => {
  angle = angle > 359 ? 0 : angle + angleAdd;
  circle.style.transform = "rotate(" + Math.round(angle) + "deg)";
  if (angleAdd >= 1) {
    angleAdd -= 0.1;
    console.log(angle, angleAdd, angleToStop);
  }
  if (angleAdd < 2 && Math.round(angle) == angleToStop) {
    clearInterval(rotInterval);
    console.log("stop at " + angleToStop + "°");
  }
}, 20);


