
<?php include ('searchbar.php'); ?>
<h1>search page</h1>
	<div class="search-container">
		
<?php
if(isset($_POST['submit-search'])){

 $search = mysqli_real_escape_string($data, $_POST['search']);
    
 $sql = "SELECT * FROM searchbar WHERE id LIKE '%$search%' OR title LIKE '%$search%' OR discription LIKE '%$search%' OR link LIKE '%$search%'";
$result = mysqli_query ($data, $sql);
$queryResuslts = mysqli_num_rows($result);

echo "there are" .$queryResuslt." results!";

if ($queryResuslts > 0) {
	while ($row = mysqli_fetch_assoc($result)){
		echo "<div class ='searchbar-box'>
	<h3>" .$row['id']."</h3>
	<p>" .$row['title']."<p>
	<p>" .$row['discription']."<p>
	<p>" .$row['link']."<p>

	<?div>";
	}
} else { 
	echo "there is no result matching your search!";

}
}

 	?>
</div>




<?php  

$title = mysqli_real_escape_string($data, $_GET['title']);
$discription = mysqli_real_escape_string($data, $_GET['discription']);
$sql = "SELECT * FROM searchbar WHERE title= '$title' AND discription= '$discription'";
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
?>	
