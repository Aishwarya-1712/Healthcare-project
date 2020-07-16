
<?php
   include 'header.php';
?>
<head>
<style>
body{
	background-image:url(cup.png);
}
h3
{ color:  #550AEC ;
font-family: 'Trocchi', serif;
 font-size: 35px;
 font-weight: normal; line-height: 48px; margin: 0; }
</style>
</head>
<body>
<center>

<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index2.php" class="w3-bar-item w3-button w3-teal">Back</a>
 
 </div>
 </div>
<br>
<br>
<div class="symptomsearch-container">
    <?php
	   if(isset($_POST['submit-search'])) 
	   {
		 $search = mysqli_real_escape_string($conn,$_POST['search']);
		 $sql = "SELECT * FROM symptomsearch WHERE symptom like '%$search%' or diseasename like '%$search%' or cause like '%$search%' or medicine like '%$search%' or type like '%$search%'";
         $result = mysqli_query($conn,$sql);
		 $queryResult = mysqli_num_rows($result);
		 
		 if($queryResult > 0)
		 {
			 while($row = mysqli_fetch_assoc($result))
			 {
		      
			   echo "<div class='symptomsearch-box'>
 			   <h3>Symptom: ".$row['symptom']."</h3>
			   <h3>Disease Name: ".$row['diseasename']."</h3>
			   <h3>Cause: ".$row['cause']."</h3>
			   <h3>Medicine: ".$row['medicine']."</h3>
			   <h3>Disease Type: ".$row['type']."</h3>
			   <p>-----X------</p>
			   </div>";
			 
			 }		 
		 }
		 else
		 {
            echo "There are no results!";        
		 }		 
	   }
	?>

</center>
</div>