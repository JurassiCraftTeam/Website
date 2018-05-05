// Create cross browser requestAnimationFrame method:
window.requestAnimationFrame = window.requestAnimationFrame
 || window.mozRequestAnimationFrame
 || window.webkitRequestAnimationFrame
 || window.msRequestAnimationFrame
 || function(f){setTimeout(f, 1000/60)}

function parallax() {
  var parallaxItems = document.getElementsByClassName("parallax"); //get all parallax enabled div's
  for(i = 0; i < parallaxItems.length; i++) {
    var mult = parallaxItems[i].id;
    parallaxItems[i].style.top = -(window.pageYOffset * mult);
  }
}

window.addEventListener("scroll", parallax, false);
window.addEventListener("load", parallax); //sets up the locations of the parallax enabled elements
