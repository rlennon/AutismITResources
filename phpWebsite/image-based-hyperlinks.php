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

<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 100px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>

<div class="container">
  <header>
    <?php include 'header.php';?>
      <?php include 'navBar.php';?>

  </header>
  <section>
    <h2 class="noDisplay">Main Content</h2>
  

  </section>

  <div class="row">
<div class="column">
  <a href = "https://autism.ie/" target = "_self"> 
         <img src = "images\autism_ireland.svg" alt = "autism.ie" border = "0"/> 
      </a>
  </div>
  <div class="column">
            <a href = "https://asiam.ie/" target = "_self"> 
         <img src = "images\asiam.png" alt = "asiam.ie" border = "0"/> 
      </a>
  </div>
 <div class="column">
	        <a href = "https://www.sess.ie/categories/autismautistic-spectrum-disorders/aspergers/autistic-spectrum-disorder-links" target = "_self"> 
         <img src = "images\ncse.gif" alt = "sess.ie" border = "0"/> 
      </a>
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
