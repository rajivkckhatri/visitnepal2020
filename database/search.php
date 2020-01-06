
<?php
// Database Structure 
CREATE TABLE `search` (
 `title` text NOT NULL,
 `description` text NOT NULL,
 `link` text NOT NULL,
 FULLTEXT KEY ('title','description')
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1

<?php
if(isset($_POST['search']))
{
 $host="localhost";
 $username="root";
 $password="";
 $databasename="sample";
 $connect=mysql_connect($host,$username,$password);
 $db=mysql_select_db($databasename);

 $search_val=$_POST['search_term'];
    
 $get_result = mysql_query("select * from search where MATCH(title,description) AGAINST('$search_val')");
 while($row=mysql_fetch_array($get_result))
 {
  echo "<li><a href='http://talkerscode.com/webtricks/".$row['link']."'><span class='title'>".$row['title']."</span><br><span class='desc'>".$row['description']."</span></a></li>";
 }
 exit();
}
?>




// $hostname = "localhost"; 
// $username = "root"; 
// $password = ""; 
// $database = "dbphpsearch"; 

// $data= mysqli_connect($hostname,$username,$password,$database); 
// if($data) {
//  echo "database connected"; 
// } else {
//  echo "database not connected"; 
// }


// if (isset($_POST['submit-search'])) {
// 	$search = mysqli_real_escape_string($data, $_POST['search']);

// 	$sql = "SELECT * FROM article WHERE title LIKE '%$search%' OR text LIKE '%$search%' OR date LIKE '%$search%' OR author LIKE '%$search%'";
// 	$result = mysqli_query ($data, $sql);
// 	$queryResuslts = mysqli_num_rows($result);

// 	echo "there are" .$queryResuslts." results!";

// if ($queryResuslts > 0) {

// while ($row = mysqli_fetch_assoc($result)){


// 	echo "<a href='visa.php? title=".$row['title']."&date=".$row['date']."'><div>
//     <h3>".$row['title']."</h3>
//     <p>".$row['text']."</p>
//     <p>".$row['date']."</p>
//     <p>".$row['author']."</p>
//     </div>";    
//     } else {
//     	echo "there is no result matching your search!";
//     }
   
//     }
// }
// }
?>

#
INSERT INTO searchbar (title, discription, link)
VALUES ('kathmandu', 'beautiful place to visit', 'kathmandu3.php');
    <?php 

$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "vnphpsearch"; 

$data= mysqli_connect($hostname,$username,$password,$database);

$query = mysqli_query ("SELECT * FROM  searchbar");
$num_rows = mysqli_num_rows($query);

while ($row = mysqli_fetch_assoc($query)){

$id = $row['id'];
$title = $row['title'];
$discription = $row['discription'];
$link = $row['link'];

echo $id. ''. $title. ''. $discription. ''. $link. '<br/>';
}

     ?>
     $id = $row['id'];
$title = $row['title'];
$discription = $row['discription'];
$link = $row['link'];


$query = mysqli_query ("SELECT * FROM  searchbar");
$num_rows = mysqli_num_rows($query);

while ($row = mysqli_fetch_assoc($query)){

$id = $row['id'];
$title = $row['title'];
$discription = $row['discription'];
$link = $row['link'];


?>

INSERT INTO searchbar (title, discription, link)
VALUES ("Far west nepal", "The sight of a white-turbaned Dhami a shaman with silver bangles on his arms and gold rings in his ears will indicate just how far west you are of the modern world", "farwestnepal");
