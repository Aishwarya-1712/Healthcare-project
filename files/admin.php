<?php 
   include 'header.php';
  ?>
<html>
<head><title>Welcome Admin</title>
<style>
body{
   background-image:url(keys.jpg);
   height: 100%;
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
   
 }
 h1 
{ color: #7c795d;
font-family: 'Trocchi', serif;
 font-size: 50px;
 font-weight: normal; line-height: 48px; margin: 0; }
 h2{
 font-size: 50px;
 font-family:Blenda Script Regular;
 }
 a{
 text-decoration:none;
 }
.btn {
  background-color: #fff9e3;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
  
}
.btn:hover {
  background-color: #230510;
  color: white;
}
 h2
{ color:   #EC1E0A;
font-family: 'Trocchi', serif;
 font-size: 40px;
 font-weight: normal; line-height: 48px; margin: 0; }



</style>
</head>
<body>
 <div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="login.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
 
 </div>
 </div>
<br>
<br>
<center> <h2>Choose your activity</h2><br /><br /><br />

 <a  class="btn" href="insertpage.php">Add a new medicine data</a> <br> <br ><br><br><br>
<a  class="btn" href="update.php">Update an existing medicine data</a><br><br ><br><br><br>
<a  class="btn" href="deletepage.php"> Delete a medicine data</a><br><br ><br><br><br>
<a  class="btn" href="viewtable.php"> View data</a><br /><br></center>
</body>
</html>