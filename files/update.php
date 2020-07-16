<?php
    include 'header.php';
?>
<html>
<head>
<title>Updation</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body{
background-color: #2C3E50;
}
input{
width: 40%;
height: 5%;
border: 1px;
border-radius: 05px;
padding: 8px 15px 8px 15px;
margin: 10px 0px 15px 0px;
box-shadow: 1px 1px 2px 1px grey;
}
</style>
</head>
<body>

<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="admin.php" class="w3-bar-item w3-button w3-teal">Back</a>
 
 </div>
 </div>
<br>
<br>
<center>
<h1 color="black"> UPDATION OF MEDICINES </h1>
<form action="" method="POST">
<input type="text" name="id" placeholder="Enter Disease ID"/><br/>
<input type="text" name="dname" placeholder="Enter disease name"/><br/>
<input type="text" name="mname" placeholder="Enter the medicine name that need to be updated"/><br/>
<input type="text" name="medicine" placeholder="Enter the new medicine name"/><br/>
<button type="submit" name="update" class="btn btn-primary"> UPDATE </button>

</form>
</center>
</body>
</html>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'dbphpsearch');
if(isset($_POST['update']))
{
$id = $_POST['id'];
$query = "UPDATE symptomsearch SET medicine='$_POST[medicine]' WHERE sid = '$_POST[id]' ";
$query_run = mysqli_query($connection,$query);
if($query_run)
{
echo '<script type = "text/javascript"> alert("Data updated") </script>';
}
else
{
echo '<script type = "text/javascript"> alert("Data Not updated") </script>';
}
}
?>

