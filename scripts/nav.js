function goHome() {
  window.location.href = "http://skyforge.site";
}
function goDownloads() {
  window.location.href = "http://skyforge.site/?page=downloads";
}
function goWiki() {
  window.location.href = "http://skyforge.site/?page=dinodex";
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
  if (scroll >= 500) {
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
