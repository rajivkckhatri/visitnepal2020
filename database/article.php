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

if (isset($_GET[''])) {
$title = mysqli_real_escape_string($data, $_GET['title']);
$discription = mysqli_real_escape_string($data, $_GET['discription']);

$sql = "SELECT * FROM searchbar WHERE title= '$title' AND discription= '$discription'";
$result = mysqli_query ($data, $sql);
$queryResuslts = mysqli_num_rows($result);


if ($queryResuslts > 0) {
while ($row = mysqli_fetch_assoc($result)){

	echo "<div class ='searchbar-box'>
	
	<p>" .$row['title']."<p>
	<p>" .$row['discription']."<p>
	<p>" .$row['link']."<p>

	<?div>";
	}
}
}

?>
</div>
 <?php include ('index/footer.php'); ?>