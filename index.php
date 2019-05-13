<!DOCTYPE html>
<html>
<head>
	<title>BLUESCOPE LYSAGHT VIETNAM</title>
	<link rel="icon" href="img64/logo.phuc" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/lysaght.css" />


</head>
<body>
	<h2 style="text-align: center; color: blue">NS BLUESCOPE LYSAGHT VIETNAM</h2>

	<div class="slideshow-container">

		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <img src="img/img_nature_wide.jpg" style="width:100%">
		  <div class="text">LYSAGHT</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="img/img_snow_wide.jpg" style="width:100%">
		  <div class="text">LYSAGHT</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="img/img_mountains_wide.jpg" style="width:100%">
		  <div class="text">LYSAGHT</div>
		</div>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>
	<br>


<div class="btn-group" style="text-align: center;">
  <a href="http://qc.lysaghtvietnam.com/_admin/index"><button style="font-size: 40px">QC APP</button>
  <a href="http://l3.lysaghtvietnam.com/"><button style="font-size: 40px">ROS </button></a>
</div>



<script>
var slideIndex = 0;
showSlides();

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
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>