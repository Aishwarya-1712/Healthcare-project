<?php
  include 'header.php';
 ?>
<html><head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 50%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 10px; /* Add a top margin */
  margin-bottom: 20x; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

body { background-image:url('gif1.gif'); background-repeat:repeat; background-size: cover; }

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  
  padding: 200px;
}

</style>
<body>
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="admin.php" class="w3-bar-item w3-button w3-teal">Back</a>
 
 </div>
 </div>
   <div class="container">
   <h1><center>Enter new data</h1>
  <center>
  <form action="" method="POST">

<input type="text"  name="symptom" placeholder="Enter Symptom" required /><br>
<br>

<input type="text" name="cause" placeholder="Enter cause" required /><br>
<br>

<input type="text" name="diseasename" placeholder="Enter Disease" required /><br>
<br>

<input type="text" name="medicine" placeholder="Enter Medicine name" required /><br>
<br>


<input type="text" name="type" placeholder="Enter Disease type" required />

<br>
<br>

<button type="submit" name="submit" class="btn btn-primary"> Submit </button>

</form>
</center>
</div>
</body>
    </html>
 

<?php
   include 'dbh.php';

if(isset($_POST['submit']))
{
	$first = $_POST['symptom'];
   $second = $_POST['diseasename'];
   $third = $_POST['cause'];
   $fourth=   $_POST['medicine'];
   $fifth= $_POST['type'];
   
$sql = "INSERT INTO  symptomsearch (symptom,diseasename,cause,medicine,type) VALUES ('$first','$second','$third','$fourth','$fifth');";
$result = mysqli_query($conn,$sql);

if($result)
{
echo '<script type = "text/javascript"> alert("Data inserted") </script>';
}
else
{
echo '<script type = "text/javascript"> alert("Data Not inserted") </script>';
}
}
?>        




