window.onscroll = function() {stickifyHeader()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function stickifyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
