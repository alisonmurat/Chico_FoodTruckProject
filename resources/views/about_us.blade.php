<!DOCTYPE html>
<html>

<head>

<style>


body {
	background-image: url("http://www.karenfayeth.com/hotairballoon.jpg")
}
body {background-color: rgb(185, 0, 0);}
ul#menu {
    padding: 2;
}

ul#menu li {
    display: inline;
}

ul#menu li a {
    background-color: rgb(53, 124, 49);
    color: white;
    padding: 10px 60px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
}

ul#menu li a:hover {
    background-color: lightgreen;
}
img { 
    width:100%; 
</style>
</head>
<body>



<ul id="menu">
<center>
  <li><a href="/aboutus">About Us</a></li>
  <li><a href="/">Home Page</a></li>
  <li><a href="/menu">Menu</a></li>
  <li><a href="/gallery">Gallery</a></li>
  <li><a href="/location">Location & Hours</a></li>
</center>  
  <br>
  <br>
  <br>
  <br>
</ul>  

<br>
<p>
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<font font size="5" color="black" style="font-family:verdana;">Chico Encalada's goal is to provide high quality, freshly made food at a reasonable price.<br> We provide a variety of mexican food for our diverse community.<br> Our mission is to spread the taste of South America throughout Washington D.C metro area.</font>
</center>
</p>

</body>
<footer>
@foreach ($about_us as $about_us)
    <p>This is user {{ $user->id }}</p>
@endforeach

</footer>
</html>
