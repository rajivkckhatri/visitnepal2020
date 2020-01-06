<?php 
include('dbs.php');
 ?>
 
 <h1>front page</h1>
 <h2>all search</h2>
<div class="article-container">

<?php

$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "dbphpsearch"; 

$data= mysqli_connect($hostname,$username,$password,$database); 
if($data) {
 echo "database connected"; 
} else {
 echo "database not connected"; 
}


$sql = "SELECT * FROM article";
$result = mysqli_query ($conn, $database);
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

How to create a search field with PHP and MySQLi 