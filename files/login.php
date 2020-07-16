<?php
    include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">

<style>
body{
background: #eee;
background-image:url(leaf2.jpg);
background-repeat:repeat;
 background-size: cover; 

}
#frm{
border: solid gray 1px;
width: 25%;
border-radius: 5px;
margin: 100px auto;
background: white;
}
#btn{
color: #fff;
background: #337ab7;
padding: 5px;
margin-left: 69%;
}
</style>
</head>
<body>
 <div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index2.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
 
 </div>
 </div>
<br>
<br>

<div id="frm">
<form action="process.php" method="POST">
<p>
<label>Username</label>
<input type="text" id="username" name="username" />
</p>
<p>
<label>Password</label>
<input type="password" id="password" name="password" />
</p>
<input type="submit" id="btn" value="login" />

</form>
</div>
</body>
</html>


