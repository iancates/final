<?php
$user = $_GET['user'];
 echo"
                <script type=\"text/javascript\">
                console.log(\"$user\");
                </script>";

echo"
    <form action=\"search.php\" method=\"POST\">
    <input type=\"hidden\" value=\"$user\" name=\"user\">
    <input type=\"submit\" value=\"Movie Search\">
    </form>
";

echo"
    <form action=\"addFav.php\" method=\"POST\">
    <input type=\"hidden\" value=\"$user\" name=\"user\">
    <input type=\"submit\" value=\"View Favorites\">
    </form>
";
?>
<!DOCTYPE html>
<html>
<body>

    
</body>
</html>