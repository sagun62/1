///////

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slajd");
  var y = document.getElementsByClassName("napis");
  var z = document.getElementsByClassName("link");

  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
    y[i].style.display = "none";
    z[i].style.display = "none";
   
  }
  
  x[slideIndex-1].style.display = "block";  
  y[slideIndex-1].style.display = "block";
  z[slideIndex-1].style.display = "block";
  
}

//////
function show(id) {
  document.getElementById(id).style.visibility = "visible";
}
function hide(id) {
    document.getElementById(id).style.visibility = "hidden"; 
}


////
function wyszukaj()


{
var my_div = null;
var newP = null;
if (document.search.szukaj.value)
{
document.search.action=document.search.szukaj.value+".html";

}
}
//////
$("#slider").fadeOut(500);