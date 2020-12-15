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
    <h3>Autism.ie</h3>
      <p>This a website that contains helpful information about autism support from Letterkenney Institute of Technology. </p>
      <p>Plrease find in the tabs above different pages with information such as resource links.</p>
      <form action="form_action.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Comment</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        <input type="submit" value="Submit">
      </form>
      <br><br><br>
      <hr>
	</article>
    <aside class="right_article"> <img src="images/autismie.jpeg" alt="" width="400" height="200" class="placeholder"> </aside>
  </section>
  <section>
  <h2 class="noDisplay">Main Content</h2>
    <article class="left_article">
    <h3>Asiam - Autistic Spectrum information Advice and Meeting Point </h3>
      <p>This a website that contains helpful information about autism support from Letterkenney Institute of Technology. </p>
      <p>Plrease find in the tabs above different pages with information such as resource links.</p>
      <form action="form_action.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Comment</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        <input type="submit" value="Submit">
      </form>
      <br><br><br>
      <hr>
	</article>
    <aside class="right_article"> <img src="images/asiam.png" alt="" width="400" height="200" class="placeholder"> </aside>
  </section>
  <section>
  <h2 class="noDisplay">Main Content</h2>
    <article class="left_article">
    <h3>NCSE - National Council for Special Education</h3>
      <p>This a website that contains helpful information about autism support from Letterkenney Institute of Technology. </p>
      <p>Plrease find in the tabs above different pages with information such as resource links.</p>
      <form action="form_action.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Comment</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        <input type="submit" value="Submit">
      </form>
      <br><br><br>
    </article>
    <aside class="right_article"> <img src="images/ncse.gif" alt="" width="400" height="200" class="placeholder"> </aside>
  </section>
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
