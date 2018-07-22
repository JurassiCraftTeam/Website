function viewContent(id) {
    var x = document.getElementById(id);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function scrollTen(){
  if(document.body.scrollTop >= 350){
    clearInterval(scrollInterv);
  }
  document.body.scrollTop = document.body.scrollTop + 10;
  document.documentElement.scrollTop = document.documentElement.scrollTop + 10;
}

function scrollDown() {
  scrollInterv = setInterval(scrollTen, 1);
}
