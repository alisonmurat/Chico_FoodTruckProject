<!DOCTYPE html>
<html ng-app="adminApp">
<head>
	 <title>Laravel</title>
	  <link href="https://fonts.googleapis.com/css?family=Lato:100,400" rel="stylesheet" type="text/css">
	<style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                margin: 0 auto;
                width: 960px;
                padding: 20px;
            }

            .content {
                float: left;
            }

            .list_wrapper {
                width: 350px;
                margin-left: 40px;
                float: left;
            }

            .title {
                font-size: 36px;
            }
            .wrapper div {
                padding: 5px;
            }
            .link {
                font-weight: 400;
            }
            .link:hover {
                color: blue;
                text-decoration: underline;
                cursor: pointer;
            }
            label {
                display: block;
                float: left;
                width: 150px;
                font-weight: 400;
            }
            input[type="text"], textarea {
                width: 400px;
            }
            textarea {
                height: 300px;
            }
            button  {
                float: right;
            }

body {background-color: rgb(185, 0, 0);}
ul#menu {
    padding: 2px;
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
<center>
<h1>Adminstrator Site</h1>
</center>

<body>
 <div class="container" ng-view>

 </div>
 <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/angular.js') }}"></script>
        <script src="{{ URL::asset('js/angular-route.js') }}"></script>
        <script src="{{ URL::asset('js/admin/app.js') }}"></script>
        <script src="{{ URL::asset('js/admin/services/PageService.js') }}"></script>
        <script src="{{ URL::asset('js/admin/controllers/PageController.js') }}"></script>
        
        <script src="{{ URL::asset('js/admin/services/ItemsService.js') }}"></script>
        <script src="{{ URL::asset('js/admin/controllers/ItemsController.js') }}"></script>
		
<ul id="menu">
<left>
  <br>
  <br>
  <br>
  <br>
  <li><a href="#/about_us">About Us</a></li>
  <br>
  <br>
  <br>
  <br>
  <li><a href="/homepage">Home Page</a></li>
  <br>
  <br>
  <br>
  <br>
  <li><a href="/home">Menu</a></li>
  <br>
  <br>
  <br>
  <br>
  <li><a href="/gallery">Gallery</a></li>
  <br>
  <br>
  <br>
  <br>
  <li><a href="/php/default.asp">Location & Hours</a></li>
</left>
  <br>
  <br>
  <br>
  <br>
  <br>
  <center>
  <button type="button" onclick="alert('Changes have been saved')">Save</button>
  <button type="button"">Edit</button>
  <button type="button" onclick="alert('Thank you for taking the survey!')">Submit</button>
  </center>
  
  </ul>  
</body>
</html>
