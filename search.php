

<?php
    if(isset($_POST['search'])) {
        $title = $_POST['title'];
        echo"
                <script type=\"text/javascript\">
                var xhr = new XMLHttpRequest();
                var url = \"http://www.omdbapi.com/?t=$title&y=&plot=short&r=json\";
                
                xhr.open(\"GET\", \"http://www.omdbapi.com/?t=$title&y=&plot=short&r=json\", false);
                xhr.send();
    
                console.log(xhr.status);
                console.log(xhr.statusText);
                
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var myArr = JSON.parse(xhr.responseText)
                    }
                xhr.open(\"GET\", url, false);
                </script>
        ";
      //  echo "<script type=\"text/javascript\">
        //    var para = document.createElement(\"p\");
          //  var node = document.createTextNode(\"This is new.\" + myArr.Year);
        //    para.appendChild(node);
        //    var element = document.getElementById(\"div1\");
        //    element.appendChild(para);
          //  </script>";
    }
?>

<!DOCTYPE html>
<html>
<body>
    <script>
    
    </script>
    <form action="search.php" method="post">
        Movie Title: <input type="text" name="title">
        <input type="submit" value="search" name="search">
    </form>
    <div id="div1">
        
    </div>
    
</body>
</html>

<?php
    echo "<script type=\"text/javascript\">
            var para = document.createElement(\"p\");
            var element = document.getElementById(\"div1\");
            var node = document.createTextNode(\"Title: \" + myArr.Title);
            para.appendChild(node);
            document.write(\"<br>\");
            var node = document.createTextNode(\"   ||  Year Released: \" + myArr.Year);
            para.appendChild(node);
            element.appendChild(para);
            </script>";
?>