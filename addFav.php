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
		echo "<input type=\"submit\" value=\"delete\" name=\"delete\" >";
		echo "</form>";
        }
}
?>