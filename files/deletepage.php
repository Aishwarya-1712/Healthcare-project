<?php
    include 'header.php';
?>
<html>
<head>
<style>

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2E4053;
  color: white;
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
<table border=1 cellpadding=1 cellspacing=1 id='customers'>
<tr>
	 <th>Sid</th>	
	 <th>Symptom</th>
	 <th>Disease name</th>
	 <th>Cause</th>
	 <th>Medicine</th>
	 <th>Type</th>
	 <th>Delete</th>
	
</tr>
   <?php
      include 'dbh.php';
	  
	  $sql = "SELECT * FROM symptomsearch";
	  $result = mysqli_query($conn,$sql);
	  
	  while($row = mysqli_fetch_array($result))
	  {
	      echo "<tr>";
		  echo  "<td>".$row['sid']."</td>";
		  echo  "<td>".$row['symptom']."</td>";
		  echo  "<td>".$row['diseasename']."</td>";
			echo    "<td>".$row['cause']."</td>";
		echo "<td>".$row['medicine']."</td>";
	    echo "<td>".$row['type']."</td>";
		echo "<td><a href = delete.php?sid=".$row['sid'].">Delete</a></td>";
	  }
   ?>

</table>
</body>
</html>
	