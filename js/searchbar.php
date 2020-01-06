
<?php include ('index/header.php'); ?>
<h1>search result</h1>
<h2>all articles</h2>
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

$sql = "SELECT * FROM searchbar";
$result = mysqli_query ($data, $sql);
$queryResuslts = mysqli_num_rows($result);

if ($queryResuslts > 0) {
while ($row = mysqli_fetch_assoc($result)){

	echo "<div class ='searchbar-box'>
	<h3>" .$row['id']."</h3>
	<p>" .$row['title']."<p>
	<p>" .$row['discription']."<p>
	<p>" .$row['link']."<p>

	<?div>";
	}
}	
// header('location:../searchpage.php');

?>