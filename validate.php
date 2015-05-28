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
$userEntered = $_POST['username'];
$passEntered = $_POST['password'];
$searchAll = mysqli_query($connect,"SELECT * FROM finalLogin");
while($row = mysqli_fetch_array($searchAll)) {
    if($row['userName'] == $userEntered) {
        if($row['password'] == $passEntered) {
              header("Location: http://web.engr.oregonstate.edu/~catesia/final/home.php?user=".$userEntered);  
        }
    }
}
//echo "test";
//header("Location: http://web.engr.oregonstate.edu/~catesia/final/final_login.php");
echo "Invalid Username or Password.";
echo "</form>";
    echo "<td><form method=\"POST\" action=\"final_login.php\">";
		echo "<input type=\"submit\" value=\"Try Again\" name=\"checkout\">";
echo "</form>";
?>