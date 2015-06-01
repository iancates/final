<?php
    
        $dbhost = 'oniddb.cws.oregonstate.edu';
        $dbname = 'catesia-db';
        $dbuser = 'catesia-db';
        $dbpass = 'lDQEFSNyQixMYm7E';

        //Done with the help of php mysqli documentation
        $connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($connect->connect_errno) {
            echo "Failed to connect: (" . $connect->connect_errno . ") " . $connect->connect_error;
        } 
    
        $user = $_POST['user'];
        $title = $_POST['title'];
echo"
                <script type=\"text/javascript\">
               
                console.log(\"$user\");
                
    
                </script>
        ";
    if(isset($_POST['addNewComment'])) {
         echo"
                <script type=\"text/javascript\">
               
                console.log(\"$user\");
                
    
                </script>
        ";
        if (!($stmt = $connect->prepare("INSERT INTO finalComments(user,title,comment) VALUES (?,?,?)"))) {
            echo "Prepare failed";
        }
        $comment = $_POST['comment'];
        
        if (!$stmt->bind_param("sss", $user,$title,$comment)) {
            echo "Binding parameters failed";
        }
        if (!$stmt->execute()) {
            echo "Execute failed";
        }
     }

        echo "
            <div class=\"blog-post\"  width =\"%50\">
            <h2 class=\"blog-post-title\">Comment Section</h2>
            <p>Here is where you can communicate to other user through posts. Simpy enter your comment in the box below, and click submit comment.
                </p>
    </div>
        ";
         echo "
            <form action=\"addComment.php\" method=\"post\" id=\"usrform\">
                <input type=\"hidden\" value=\"$user\" name=\"user\">
                <input type=\"hidden\" value=\"$title\" name=\"title\">
                <input type=\"submit\" value=\"Submit\" name=\"addNewComment\">
            </form>  
            <textarea rows=\"4\" cols=\"50\" name=\"comment\" form=\"usrform\">
            Enter comment here...</textarea>
            ";
        $getAll = mysqli_query($connect,"SELECT * FROM finalComments");
        
        echo "
            <script type=\"text/javascript\">
                console.log(\"$title\")
            </script>
        ";
        while($row = mysqli_fetch_array($getAll)) {
            if($row['title'] == $title){
		      echo "<p>";
		      echo "<td>".$row['user']."   </td>";
                echo ": ";
                echo "<td>".$row['comment']."   </td>";	
		      echo "</p>";
        }
        }
echo "
            <form action=\"search.php\" method=\"post\" id=\"usrform\">
                <input type=\"hidden\" value=\"$user\" name=\"user\">
                <input type=\"hidden\" value=\"$title\" name=\"title\">
                <input type=\"submit\" value=\"GO back to movie page\" name=\"addComment\">
            </form>  
            ";
?>
<html>
  
  <head>
    <meta charset="UTF-8">


    
    
    
    
    
    <link rel="stylesheet" href="addComment_style.css">

    
    
    
  </head>
</html>








