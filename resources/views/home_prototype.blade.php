<!DOCTYPE html>
<html>
<head>
<style>
body {
	background-image: url("http://www.karenfayeth.com/hotairballoon.jpg")
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
  <br>	
</ul>  
<center>
<img src="/photos/1.jpg" alt="Team" style="width:460px;height:260px;"> <center>$4.99 Classic</center>
<br>
<br>
<img src="/photos/2.jpg" alt="Truck" style="width:460px;height:260px;"> <center>$6.99 Taco Delight</center>
<br>
<br>
<img src="/photos/3.jpg" alt="Truck" style="width:460px;height:260px;"> <center>$9.99 Taco Tacos</center>
<br>
<br>
<img src="/photos/13.jpg" alt="Truck" style="width:460px;height:260px;"> <center>$19.99 Classic II</center>
<br>
<br>
<br>

</center>
</body>
<footer>
@foreach ($menus as $menu)
    <p>This is user {{ $user->id }}</p>
@endforeach
</footer>
</html>
