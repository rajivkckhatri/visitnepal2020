
<?php 
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "vnuserdata"; 

$con= mysqli_connect($hostname,$username,$password,$database); 
if($data) {
 echo "database connected"; 
} else {
 echo "database not connected"; 
} 
// collect
if(isset($_post['search'])){
    $searchq = $_post['search'];
    searchq =preg_replace("#[^0-9a-z]#i","", "$searchq");
    $query =mysql_query(
        "se") or die("could not search!");
}
if(isset($_POST['search'])) {
$result =  mysqli_query($con,"SELECT * FROM members WHERE Name='".mysqli_real_escape_string($con,$_POST['search'])."'");
If(mysqli_num_rows($result)!=0) {
$row = mysqli_fetch_array($result);
//$row is associated array of member data, echo what you want here
}
Else {
//no results

search function() {
            var $search = $('#search');
            if ($search.length > 0) {
                var searchBtn = $('#btn-search'),
                    searchBtnClose = $('#btn-search-close'),
                    searchInput = $search.find('.form-control');

                function openSearch() {
                    $body.addClass('search-open');
                    searchInput.focus();
                }

                function closeSearch() {
                    $body.removeClass('search-open');
                    searchInput.value = '';
                }
                searchBtn.on('click touchend', function() {
                    openSearch();
                    return false;
                });
                searchBtnClose.on('click touchend', function() {
                    closeSearch();
                    return false;
                });
                document.addEventListener('keyup', function(ev) {
                    if (ev.keyCode == 27) {
                        closeSearch();
                    }
                });
            }
        },