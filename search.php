

<?php
    $user = $_POST['user'];
    $title = $_POST['title'];
    if(isset($_POST['search'])) {
        
        
        echo"
                <script type=\"text/javascript\">
                var xhr = new XMLHttpRequest();
                var url = \"http://www.omdbapi.com/?t=$title&y=&plot=short&r=json\";
                
                xhr.open(\"GET\", \"http://www.omdbapi.com/?t=$title&y=&plot=short&r=json\", false);
                xhr.send();
    
                console.log(xhr.status);
                console.log(xhr.statusText);
                console.log(\"$user\");
                
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var myArr = JSON.parse(xhr.responseText)
                    }
                xhr.open(\"GET\", url, false);
               
                </script>
        ";
     
        
        
    }
    echo "
        <form action=\"search.php\" method=\"post\">
        Movie Title: <input type=\"text\" name=\"title\">
        <input type=\"hidden\" value=\"$user\" name=\"user\">
        <input type=\"submit\" value=\"search\" name=\"search\">
        </form>
    ";
?>

<!DOCTYPE html>
<html>
<body>
    <script>
    
    </script>
    
    <div id="div1">
        
    </div>
    
</body>
</html>
<?php //echo "<img src=\"$poster\" alt=\"some_text\">";?>
<?php
    if(isset($_POST['search'])) {
    echo "
        <script type=\"text/javascript\">
            var para = document.createElement(\"p\");
            var element = document.getElementById(\"div1\");
            
            var img = new Image();
            img.src = myArr.Poster
            document.body.appendChild(img);
        
            var node = document.createTextNode(\"Title: \" + myArr.Title);
            para.appendChild(node);
            document.write(\"<br>\");
            var node = document.createTextNode(\"   ||  Year Released: \" + myArr.Year);
            para.appendChild(node);
            element.appendChild(para);
            </script>";
        
        echo "
            <form action=\"search.php\" method=\"post\">
                <input type=\"hidden\" value=\"$user\" name=\"user\">
                <input type=\"hidden\" value=\"$title\" name=\"title\">
                <input type=\"submit\" value=\"Add to Favorites\" name=\"addfav\">
            </form>         
            ";
    }
?>

<?php
if(isset($_POST['addfav'])) {
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
   if (!($stmt = $connect->prepare("INSERT INTO finalFav(user,title) VALUES (?,?)"))) {
            echo "Prepare failed";
        }

        if (!$stmt->bind_param("ss", $user,$title)) {
            echo "Binding parameters failed";
        }
        if (!$stmt->execute()) {
            echo "Execute failed";
        }
        else{
         echo "Added to Favorites";   
        }
}
?>


<?php
    if(isset($_POST['search'])) {
          $dbhost = 'oniddb.cws.oregonstate.edu';
        $dbname = 'catesia-db';
        $dbuser = 'catesia-db';
        $dbpass = 'lDQEFSNyQixMYm7E';

        //Done with the help of php mysqli documentation
        $connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($connect->connect_errno) {
            echo "Failed to connect: (" . $connect->connect_errno . ") " . $connect->connect_error;
        } 
        echo "
            <form action=\"search.php\" method=\"post\">
                <input type=\"hidden\" value=\"$user\" name=\"user\">
                <input type=\"hidden\" value=\"$title\" name=\"title\">
                <input type=\"submit\" value=\"Add comment\" name=\"addComment\">
            </form>  
            <textarea rows="4" cols="50" name=\"comment\" form=\"usrform\">
            Enter text here...</textarea>
            ";
        
    }
?>
<!DOCTYPE html>
<html>
<body>
    <script>
    
    </script>
    
    
</body>
</html>