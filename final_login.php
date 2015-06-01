<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">


    
    
    
    
    
    <link rel="stylesheet" href="final_login_style.css">

    
    
    
  </head>

<body>
    <div class="blog-header">
        <h1 class="blog-title">Movie Search</h1>
      </div>
<section class="loginform cf">
<form name="login" action="validate.php" method="post">
    <ul>
        <li><label for="username">Username</label>
        <input type="text" name="username" required></li>
        
        <li><label for="password">Password</label>
        <input type="password" name="password" required></li>
        
        <li>
        <input type="submit" value="Login"></li>
    </ul>
    </form>
</section>
<form action="newUser.php" method="post">
<input type="submit" value="New User">
</form>
<div class="blog-post"  width ="%50">
            <h2 class="blog-post-title">What is Movie Search</h2>
            <p>Movie Search is an exciting app that allows you to search for your favorite movies, then you can leave comments to talk to other people about that movie. All you have to do is make an account and login.
                </p>
    </div>
</body>
</html>