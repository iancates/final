<?php
$user = $_GET['user'];
 echo"
                <script type=\"text/javascript\">
                console.log("$user");
                </script>";
?>
<!DOCTYPE html>
<html>
<body>
<form action="search.php" method="POST">
<input type="hidden" value="$<?php echo $_GET['user']?>" name="user">
<input type="submit" value="Movie Search">
</form>
    
</body>
</html>