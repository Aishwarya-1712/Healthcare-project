
<?php  
 require('dbh.php');

if (isset($_POST['username']) and isset($_POST['password'])){

// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `login` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){


header("Location: admin.php");

}else{
echo "Invalid Login Credentials";

header("Location: login.php");

}
}
?>
