<?php 
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "vnuserdata"; 

$data= mysqli_connect($hostname,$username,$password,$database); 
if($data) {
 echo "database connected"; 
} else {
 echo "database not connected"; 
} 

mysqli_select_db($data, 'vnuserdata');
$user =$_POST['user'];
$email =$_POST['email'];
$contact =$_POST['contact'];
$address =$_POST['address'];
$plan =$_POST['plan'];
$bookingdate =$_POST['bookingdate'];
$numberofpeople =$_POST['numberofpeople'];
$message =$_POST['message'];
$query = " insert into booking (user, email, contact, address, plan, bookingdate, numberofpeople, message)
values ('$user', '$email', '$contact', '$address', '$plan', '$bookingdate', '$numberofpeople', '$message')";
echo "$query";
mysqli_query($data, $query);
header('location:../infobooked.php');
?> 