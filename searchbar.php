
<?php include ('index/header.php'); ?>
<style >
	.search-container{
width: 100%;
height: 100%;
background-color: #70DFD0;
padding: 50px;
	}
	.searchbar-box{
		padding-bottom: 30px;
		width: 100%;
	}
</style>

<div class="search-container">
<?php
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "vnuserdata"; 

$data= mysqli_connect($hostname,$username,$password,$database); 
if($data) {
 // echo "database connected"; 
} else {
 echo "database not connected"; 
} 

$sql = "SELECT * FROM searchbar";
$result = mysqli_query ($data, $sql);
$queryResuslts = mysqli_num_rows($result);

if ($queryResuslts > 0) {
while ($row = mysqli_fetch_assoc($result)){

	// echo "<div class ='searchbar-box'>
	// <h3>" .$row['id']."</h3>
	// <p>" .$row['title']."<p>
	// <p>" .$row['discription']."<p>
	// <p>" .$row['link']."<p>

	// <?div>";
	}
}	
// header('location:../searchpage.php');


if(isset($_POST['submit-search'])){

 $search = mysqli_real_escape_string($data, $_POST['search']);
    
 $sql = "SELECT * FROM searchbar WHERE id LIKE '%$search%' OR title LIKE '%$search%' OR discription LIKE '%$search%' OR link LIKE '%$search%'";
$result = mysqli_query ($data, $sql);
$queryResuslts = mysqli_num_rows($result);

echo "" .$queryResuslts." results!";

if ($queryResuslts > 0) {
	while ($row = mysqli_fetch_assoc($result)){
		echo "<a href = 'blog.php?title=".$row['title']."&discription=".$row['discription']."'><div class ='searchbar-box'>
	
	<p>" .$row['title']."<p>
	<p>" .$row['discription']."<p>
	<p>" .$row['link']."<p>

	<?div></a>";
	}
} else { 
	echo "&nbsp;&nbsp;There is no result matching your search!";

}
}

 ?>
 </div>

 <?php include ('index/footer.php'); ?>