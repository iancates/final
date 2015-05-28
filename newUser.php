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
    if($_POST['username'] == '') {
        echo "Username field is empty.";   
    }
    if($_POST['password'] == '') {
        echo "Password field is empty.";   
    }
    
    if($_POST['username'] != '' and $_POST['password'] != '') {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        if (!($stmt = $connect->prepare("INSERT INTO finalLogin(userName,password) VALUES (?,?)"))) {
            echo "Prepare failed";
        }

        if (!$stmt->bind_param("ss", $user,$pass)) {
            echo "Binding parameters failed";
        }
        if (!$stmt->execute()) {
            echo "Execute failed";
        }
        //Change to redirect to sucsefull creation page
        header("Location: http://web.engr.oregonstate.edu/~catesia/final/final_login.php");
    }
    
}

?>

<!DOCTYPE html>
<html>
<body>

<form action="newUser.php" method="post">
Enter Desired Username: <input type="text" name="username"><br>
Enter New Password: <input type="secret" name="password"><br>

<input type="submit" value="Create New User" name="createNew">
</form>

</body>
</html>

