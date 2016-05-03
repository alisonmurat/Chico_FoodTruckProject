<!DOCTYPE html>
<html>
<head>


<style>
div.cfg {
    margin: 5px;
    border: 2px solid #black;
    width: 1000px;
}
div.img {
    margin: 5px;
    border: 2px solid #black;
    float: left;
    width: 180px;
}

div.img img {
    width: 100%;
    height: 100%;
}
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
<div class="img">
<img src="/chicos_logo.jpg" alt="food truck">
</div>
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
</div>
<div class="cfg">
@foreach( $gallery as $g)
	<a href="/pictures/1">{{ $g->name }}</a>
</div>
@endforeach

@foreach( $gallery as $image)
<div class="image">
    <img src="/pictures/{{ $g->name }}">
</div>
@endforeach

<div class="cfg">
<img src="/photos/1.jpg" alt="food" style="width:160px;height:160px;"> 
<img src="/photos/2.jpg" alt="Truck" style="width:160px;height:160px;">
<img src="/photos/3.jpg" alt="Truck" style="width:160px;height:160px;">
<img src="/photos/4.jpg" alt="Truck" style="width:160px;height:160px;">
<br>
<img src="/photos/5.jpg" alt="Truck" style="width:160px;height:160px;">
<img src="/photos/6.jpg" alt="Truck" style="width:160px;height:160px;">
<img src="/photos/7.jpg" alt="Truck" style="width:160px;height:160px;">
<img src="/photos/8.jpg" alt="Truck" style="width:160px;height:160px;">
<br>
<img src="/photos/9.jpg" alt="Truck" style="width:160px;height:160px;">
<img src="/photos/10.jpg" alt="Truck" style="width:160px;height:160px;">
<img src="/photos/11.jpg" alt="Truck" style="width:160px;height:160px;">
<img src="/photos/12.jpg" alt="Truck" style="width:160px;height:160px;">
</div>
</center>
</body>
</html>
