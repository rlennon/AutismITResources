<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AutismIt</title>
<link href="index.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
</head>
<body>
<div class="container">
  <header>
    <?php include 'header.php';?>
      <?php include 'navBar.php';?>

  </header>
  <section>
    <h2 class="noDisplay">Main Content</h2>
    <article class="left_article">
      <h3>Register</h3>
      <?php include('createUser.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Registration system PHP and MySQL
    </title>
    <link rel="stylesheet" type="text/css"
                    href="Styles/Stylesheet.css">
</head>

<body>
    <div class="header">
        <h2>Register</h2>



        <form action="createUser.php" method="post">
         <input type="hidden" name="reg_user" value="true">
         <br>
         <label><b>Username</b>: </label><input type="text" name="username" placeholder="Enter Username"/>
         <br>
         <label><b>Email</b>: </label><input type="text" name="email" placeholder="Enter Email"/>
         <br>
         <label><b>Password</b> : </label><input type="password" name="password_1" placeholder="Enter Password"/>
         <br>
         <label><b>Confirm Password</b>: </label><input type="password" name="password_2" placeholder="Re-Enter Password"/>
         <br>
         <input type="submit" value="Register">
         <br>
         <a href="login.php">Have an account? Login</a>

      </form>
</body>
</html>
    </article>

  </section>

  <div class="row blockDisplay">
    <div class="column_half left_half">
      <h2 class="column_title"><a href="image-based-hyperlinks.php">RESOURCES A-Z</h2>
    </div>
    <div class="column_half right_half">
      <h2 class="column_title"><a href="facebook.com">ARTICLES A-Z</h2>
    </div>
  </div>
  <div class="social">

    <p class="social_icon"><a href="facebook.com"><i class = 'fa fa-facebook' style='font-size:60px;color:#52bad5;'></i></p>
    <p class="social_icon"><a href="twitter.com"><i class = 'fa fa-twitter' style='font-size:60px;color:#52bad5;'></i></p>
    <p class="social_icon"><a href="instagram.com"><i class = 'fa fa-instagram' style='font-size:60px;color:#52bad5;'></i></p>
    <p class="social_icon"><a href="youtube.com"><i class = 'fa fa-youtube' style='font-size:60px;color:#52bad5;'></i></p>
  </div>
  <?php include 'footer.php';?>
</div>
</body>
</html>
