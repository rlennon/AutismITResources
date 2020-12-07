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
      <h3>Login Page</h3>

<div align="center">


    <form action ="home.html" id="form_login">
        <p>
            <input type="text" placeholder="email" />
        </p>
        <p>
            <input type="password" placeholder="password" />
        </p>
        <p>
            <input type = "submit" id = "login" value ="Login"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "#reset pass link">Forgot your password?</a>
        </p>
	<p>
	    <a href="register.php">Don't have an account? Click Here!</a>	
	</p>
    </form>

    </article>

  </section>

  <div class="row blockDisplay">
    <div class="column_half left_half">
      <h2 class="column_title"><a href="image-based-hyperlinks.php">RESOURCES</h2>
    </div>
    <div class="column_half right_half">
      <h2 class="column_title"><a href="News.php">ARTICLES</h2>
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
