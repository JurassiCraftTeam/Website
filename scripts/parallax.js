// Create cross browser requestAnimationFrame method:
window.requestAnimationFrame = window.requestAnimationFrame
 || window.mozRequestAnimationFrame
 || window.webkitRequestAnimationFrame
 || window.msRequestAnimationFrame
 || function(f){setTimeout(f, 1000/60)}

function parallax() {
  var parallaxItems = document.getElementsByClassName("parallax"); //get all parallax enabled div's
  for(i = 0; i < parallaxItems.length; i++) {
    var stat = parallaxItems[i].id;
    var stats = stat.split(" - "); //splits the two parallax items apart [0]=scroll multiplier [1]=default y offset
    parallaxItems[i].style.top = -(window.pageYOffset * stats[0])+parseInt(stats[1]);
  }
}

window.addEventListener("scroll", parallax, false);
window.addEventListener("load", parallax); //sets up the locations of the parallax enabled elements
