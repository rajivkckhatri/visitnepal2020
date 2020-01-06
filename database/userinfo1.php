<?php
include <?php include ('index/header.php'); ?>
 ?>
 
 <form action="search.php" method="POST">
 <input type="text" name="search" placeholder="search">
 	<button type="submit" name="submit-search"></button>
 </form>
 <h1>front page</h1>
 <h2>all search</h2>
<div class="article-container">

<?php


$sql = "SELECT * FROM article";
$result = mysqli_query ($conn, $sql);
$queryResuslts = mysql_num_rows($result);

if ($queryResuslts > 0) {
while ($row = mysql_fetch_assoc($result)){
    
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
</body>
</html>