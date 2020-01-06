<?php  
<?php 
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "dbphpsearch"; 

$conn= mysqli_connect($hostname,$username,$password,$database); 
if($data) {
 echo "database connected"; 
} else {
 echo "database not connected"; 


?>
