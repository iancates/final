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
            echo "Invalid Username try again";
        }
        else {
        //Change to redirect to sucsefull creation page
        header("Location: http://web.engr.oregonstate.edu/~catesia/final/final_login.php");
        }
    }
    
}

?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="newUser_style.css">
<body>
    <div class="blog-header">
        <h1 class="blog-title">Create Account</h1>
        <p>To create an account all you have to do is enter your desired username and password. Just be aware that the name you choose will be displayed next to any comments you make.
                </p>
      </div>
<section class="newUser cf">
    <form action="newUser.php" method="post">
        <ul>
        <li><label for="username">Enter Username</label>
        <input type="text" name="username" required></li>
        
        <li><label for="password">Enter Password</label>
        <input type="password" name="password" required></li>
        
        <li>
        <input type="submit" value="Create New User" name="createNew"></li>
    </ul>
    
</form>
</section>
</body>
</html>

