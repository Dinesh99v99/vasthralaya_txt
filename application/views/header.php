<html>
<head>
<style>
 nav .mainmenu{ 
width: 40%;
display: flex;
 justify-content: space-around;
} 
 nav .logo {
  float: right;
  width: 300px;
  padding: 120px;
} 
nav{
width: 100%; height: 15vh;
background: #330000;
display: flex; justify-content: space-between;
align-items: center;
}
</style>
</head>
<body>
<nav>
<div  class = "logo" <h3><a style="color:white;" href="<?=base_url ('Product/index')?>">VASTHRALAYA TEX</a></h3></div>
<div class = "mainmenu">

<a style="color:white;" href="<?=base_url ('Product/home')?>">Home</a>
<a style="color:white;" href="<?=base_url ('Product/image')?>">Image</a>
<a style="color:white;" href="<?=base_url ('Product/about')?>">About Us</a>
<a style="color:white;" href="#contact">Contact Us</a>
  </div>
</nav>
</body>
</html>
