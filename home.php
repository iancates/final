<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="home_style.css">
<body>
<div class="blog-header">
        <h1 class="blog-title">Movie Search Home</h1>
      </div>
<div class="blog-post"  width ="%50">
            <h2 class="blog-post-title"></h2>
            <p>To search for a movie click the Movie search button. Otherwise if you want to view your list of favorite movies click the view favorites button.
                </p>
    </div>
    
</body>
</html>
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