<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="addFav_style.css">
<body>
<div class="blog-header">
        <h1 class="blog-title">Favorites</h1>
      </div>
<div class="blog-post"  width ="%50">
            <h2 class="blog-post-title"></h2>
            <p>Here is a list of all the movies you chose to save as a favorite.
                </p>
    </div>
    
</body>
</html>
<?php 
ini_set('display_errors', 1);
$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'catesia-db';
$dbuser = 'catesia-db';
$dbpass = 'lDQEFSNyQixMYm7E';

//Done with the help of php mysqli documentation
$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connect->connect_errno) {
    echo "Failed to connect: (" . $connect->connect_errno . ") " . $connect->connect_error;
}
$getAll = mysqli_query($connect,"SELECT * FROM finalFav");
$user = $_POST['user'];
while($row = mysqli_fetch_array($getAll)) {
        if($row['user'] == $user){
		echo "<tr>";
		echo "<td>".$row['title']."   </td>";		
		echo "<td><form method=\"POST\" action=\"movie.php\">";
		echo "<input type=\"hidden\" name=\"index\" value=\"".$row['title']."\">";
		
		echo "</form>";
        }
}
?>