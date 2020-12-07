<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AutismIt</title>
<link href="index.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<style>
    /* Style inputs with type="text", select elements and textareas */
    .contactText, #subject {
        width: 100%; /* Full width */
        padding: 12px; /* Some padding */  
        border: 1px solid #ccc; /* Gray border */
        border-radius: 4px; /* Rounded borders */
        box-sizing: border-box; /* Make sure that padding and width stays in place */
        margin-top: 6px; /* Add a top margin */
        margin-bottom: 16px; /* Bottom margin */
        resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
    }

    /* Style the submit button with a specific background color etc */
    #contactBtn {
        background-color: #52bad5;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    /* Add a background color and some padding around the form */
    .contact-form {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
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
      <h3>Contact Us</h3>
      <div class="contact-form">
                <form action="form_action.php">
            
                    <label for="fname">First Name</label>
                    <input type="text" class="contactText" id="fname" name="firstname">
                
                    <label for="lname">Last Name</label>
                    <input type="text" class="contactText" id="lname" name="lastname">

                    <label for="email">Email Address</label>
                    <input type="text" class="contactText" id="emailAdd" name="emailAdd">
                
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" style="height:200px"></textarea>
                
                    <input type="submit" id="contactBtn" value="Submit">
                </form>
            </div>

            <div class="contact-info">
                <h1>Contact Information</h1>
                <ul>
                    <li>Telephone: 081234567</li>
                    <li>Address: Main Street, Letterkenny</li>
                    <li>Opening Hours: Monday - Friday 9am - 5pm</li>
                </ul>
            </div>
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