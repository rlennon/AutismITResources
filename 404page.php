<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>404 Error</title>
<link href="index.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
  <script>
    setTimeout(function(){
      window.location.href='index.php';
    }, 5000);
  </script>
</head>
<body>
<div class="container">
  <header>
    <?php include 'AutismITResources/header.php';?>

  </header>
  <section>

    <h2 class="noDisplay">404 Error</h2>
    <article class="left_article">
      <h3>Oops looks like we have made an Error</h3>
      <p>Redirecting you back to home page...</p>
    </article>
      <img src="images/404.jpg" width="280" height="280" title="404 error" alt="Monsters inc" />

  </section>


  <div class="social">

    <p class="social_icon"><a href="facebook.com"><i class = 'fa fa-facebook' style='font-size:60px;color:#52bad5;'></i></p>
    <p class="social_icon"><a href="twitter.com"><i class = 'fa fa-twitter' style='font-size:60px;color:#52bad5;'></i></p>
    <p class="social_icon"><a href="instagram.com"><i class = 'fa fa-instagram' style='font-size:60px;color:#52bad5;'></i></p>
    <p class="social_icon"><a href="youtube.com"><i class = 'fa fa-youtube' style='font-size:60px;color:#52bad5;'></i></p>
  </div>
  <?php include 'AutismITResources/footer.php';?>
</div>
</body>
</html>
