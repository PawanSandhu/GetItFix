
var slideIndex = 0;
showSlides();
console.log("neter");
$('#page-index').on('pageshow', function() {
  alert('hello');
  console.log("hiiiii");
 });

$("#page-index-submit").click(function(){
    alert("The paragraph was clicked.");
});

$(document).ready(function(){
    console.log("alert1");
    $(".request-button").click(function(){
        alert("request-button");
    });
});

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active1", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active1";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
