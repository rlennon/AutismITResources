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
      <h3>Community</h3>
      <p>Interact with some of your favourite resources </p>

    </article>

  </section>
    <div class="row">
      <div class="columns">
        <p class="thumbnail_align"> <img src="images/NCSE.gif" alt="" class="thumbnail"/> </p>
        <h4>Resource 1</h4>
        <p>text goes here for said resource</p>
          <form action="/action_page.php">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value="John"><br>
            <label for="lname">Comment</label><br>
            <input type="text" id="lname" name="lname" value="Doe"><br><br>
            <input type="submit" value="Submit">
          </form>
    </div>
    <div class="columns">
      <p class="thumbnail_align"> <img src="images/NCSE.gif" alt="" class="thumbnail"/> </p>
      <h4>Resource 1</h4>
      <p>text goes here for said resource</p>
        <form action="/action_page.php">
          <label for="fname">First name:</label><br>
          <input type="text" id="fname" name="fname" value="John"><br>
          <label for="lname">Comment</label><br>
          <input type="text" id="lname" name="lname" value="Doe"><br><br>
          <input type="submit" value="Submit">
        </form>
  </div>
  <div class="columns">
    <p class="thumbnail_align"> <img src="images/NCSE.gif" alt="" class="thumbnail"/> </p>
    <h4>Resource 1</h4>
    <p>text goes here for said resource</p>
      <form action="/action_page.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Comment</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        <input type="submit" value="Submit">
      </form>
</div>
<div class="columns">
  <p class="thumbnail_align"> <img src="images/NCSE.gif" alt="" class="thumbnail"/> </p>
  <h4>Resource 1</h4>
  <p>text goes here for said resource</p>
    <form action="/action_page.php">
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname" value="John"><br>
      <label for="lname">Comment</label><br>
      <input type="text" id="lname" name="lname" value="Doe"><br><br>
      <input type="submit" value="Submit">
    </form>
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
