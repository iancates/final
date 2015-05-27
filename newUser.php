<!DOCTYPE html>
<html>
<body>

<form action="validate.php" method="post">
Enter Desired Username: <input type="text" name="username"><br>
Enter New Password: <input type="secret" name="password"><br>

<input type="submit" value="Create New User" name="createNew">
</form>

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

if(isset($_POST['createNew'])) {
    if(!isset($_POST['username'])) {
        echo "Username field is empty.";   
    }
    elseif(!isset($_POST['password'])) {
        echo "Password field is empty.";   
    }
    
}

?>
