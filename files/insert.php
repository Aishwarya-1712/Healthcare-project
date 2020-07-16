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
	echo '<script type = "text/javascript"> alert("Data inserted) </script>';
}
else
{
    echo '<script type = "text/javascript"> alert("Data not inserted") </script>';
	
}
}
?>                  




