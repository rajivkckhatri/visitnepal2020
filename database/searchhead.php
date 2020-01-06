
<h1>search</h1>

<div class="article-container">
<?php



$sql = "SELECT * FROM article";
$result = mysqli_query ($conn, $sql);
$queryResuslts = mysqli_num_rows($result);

if ($queryResuslts > 0) {
while ($row = mysqli_fetch_assoc($result)){
    
    echo "<div>
    <h3>".$row['title']."</h3>
    <p>".$row['text']."</p>
    <p>".$row['date']."</p>
    <p>".$row['author']."</p>
    </div>";    
    }
}

 ?>
 </div>