// Set the date we're counting down to
var countDownDate = new Date("Jan 1, 2021 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(clockdown(), 1000);
setInterval(clockdown, 1000);
clockdown();
function clockdown() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("timer").innerHTML = days + " : "+ " " + hours + " : "
  + minutes + " : " + seconds ;

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}
