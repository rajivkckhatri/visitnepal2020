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
$mobile =$_POST['mobile'];
$comment =$_POST['comment'];
$query = " insert into userinfodata (user, email, mobile, comment)
values ('$user', '$email', '$mobile', '$comment')";
echo "$query";
mysqli_query($data, $query);
header('location:../index.php');
?> 