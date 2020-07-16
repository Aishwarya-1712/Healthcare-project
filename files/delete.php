
<?php
   include 'dbh.php';
   
		mysqli_select_db($conn,'dbphpsearch');
		$sql = "DELETE FROM symptomsearch where sid='$_GET[sid]'";
   
		 
		 if(mysqli_query($conn,$sql))
		 {
			
header("refresh:1; url=deletepage.php"); 
		 }
		 else
		 {
            echo "Not deleted";        
		 }		 
	  
	   
?>
