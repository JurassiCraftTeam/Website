function goHome() {
  window.location.href = "http://localhost/";
}
function goDownloads() {
  window.location.href = "http://localhost/?page=downloads";
}
function goWiki() {
  window.location.href = "http://localhost/?page=wikilanding";
}
function downloadJC() {
  window.location.href = "http://localhost/?page=jurassicraft";
}
function goDevdex() {
  window.location.href = "http://localhost/?page=devdex";
}
function goDinodex() {
  window.location.href = "http://localhost/?page=dinodex";
}
function goBlockdex() {
  window.location.href = "http://localhost/?page=blockdex";
}

function getScrollTop() {
  if (typeof window.pageYOffset !== 'undefined' ) {
    // Most browsers
    return window.pageYOffset;
  }

  var d = document.documentElement;
  if (d.clientHeight) {
    // IE in standards mode
    return d.scrollTop;
  }

  // IE in quirks mode
  return document.body.scrollTop;
}

function updateNav() {
  var box = document.getElementById('navbar');
  scroll = getScrollTop();
  if (scroll >= 300) {
    box.style.top = "0";
  }
  else {
    box.style.top = "-100";
  }
}

window.onscroll = function() {
  if(document.getElementById('navbar')) {
    updateNav();
  }
};

window.onload = function() {
  updateNav();
};
