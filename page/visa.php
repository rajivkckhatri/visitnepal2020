<?php include 'header.php'; ?>


<h1>Blog Articles</h1>
<div class="article-container">
<?php

$title = mysqli_real_escape_string($data, $_GET['title']);
$date = mysqli_real_escape_string($data, $_GET['date']);
$sql = "SELECT * FROM article WHERE title='$title' AND date='$date'";
$result = mysqli_query ($data, $sql);
$queryResuslts = mysqli_num_rows($result);

if ($queryResuslts > 0) {
while ($row = mysqli_fetch_assoc($result)){
    
    echo "<div class='article-box'>
    <h3>".$row['title']."</h3>
    <p>".$row['text']."</p>
    <p>".$row['date']."</p>
    <p>".$row['author']."</p>
    </div>";    
    }
}

 ?>
 </div>