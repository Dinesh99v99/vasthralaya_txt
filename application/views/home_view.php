<!DOCTYPE html>
<html>

<head>
<title>HOME</title>
<style>
.w3-center,.w3-content {
  padding-top: 0px;
  /* padding-right: 10px; */
  /* padding-bottom: 10px; */
  padding-left: 500px;
}
.home_start{
width: 100%; height: 100vh;
background: #ffb3d1;

}
</style>
</head>

<body>
<?php
include "header.php";                 
?>
<div class="home_start">
<h2 class="w3-center"> WELCOME TO VASTHRALAYA TEX</h2>

<div class="w3-content w3-section" style="max-width:400px">
  <img class="mySlides" src="https://www.pashudh.com/wp-content/uploads/2021/05/HomePagebanner.jpg" style="width:100%">
  <img class="mySlides" src="https://www.pashudh.com/wp-content/uploads/2021/04/1-47.jpg" style="width:100%">
  <img class="mySlides" src="https://www.pashudh.com/wp-content/uploads/2021/06/banner-5.jpg" style="width:100%">
</div>
<h1>Silk has a long history in India..</h1>
<i><li>handloom silk sarees are made from silk  threads</li>
</i>
<h2>Weaving</h2>
<i><li>The sarees are weaving from pure mulberry silk thread</li>
<li> border colour and design are usually quite different from the body</li>
<li>the body meets the mundhi is often denoted by a zigzag line</li>
<i>
<h2>Design</h2>
<i><li>Sarees are designed by their wide contrast borders</li>
<li>colours, pattern, material used like zari (gold thread)</li>
</i>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<?php
include "footer.php";                 
?>
</body>
</html>
