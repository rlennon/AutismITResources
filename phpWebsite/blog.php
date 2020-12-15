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
        .container h2 {
            text-align: center;
            color: #B3B3B3;
        }
        .container .leftcolumn {   
            float: left;
            width: 45%;
            text-align: justify;
            color: #B3B3B3;
        }

        /* Right column */
        .container .rightcolumn {
            float: right;
            width: 45%;
            padding-left: 5px;
            text-align: justify;
            color: #B3B3B3;
        }
        
        /* Fake image */
        .container .fakeimg {
            background-color: #aaa;
            width: 90%;
        }
        
     </style>
<div class="container">
    <header>
      <?php include 'header.php';?>
      <?php include 'navBar.php';?>
    </header>
    <Section>  
    <h2> Blog Posts </h2>
        <div class="leftcolumn">
            <div class="card">
                <h2>Our Recent Fundraiser</h2>
                <h5>A Fundraiser Thank you, by Joe Bloggs, Autism IT team, Dec 11, 2020</h5>
                <div class="fakeimg" style="height:200px;"><img src="images/fundraiserimage.png" alt="" width="600" height="200"></div>
                <p>We recently hosted a fundraiser for awarness.</p>
                <p>The fundraiser was a bug success and we would like to thank everyone who was involved in the organising of the fundraiser and most importantly everyone who gave so generously</p>
            </div>
        </div>
        
        <div class="rightcolumn">
            <div class="card">
                <h2>Upcomming Events</h2>
                <h5>A list of events over the next year, June Smith Dec 8, 2020</h5>
                <div class="fakeimg" style="height:200px;"><img src="images/calendar.png" alt="" width="600" height="200"></div>
                <p>We have several events coming up througout the year.</p>
                <p>We have talks, fundraisers and communtiy events scheduled througout the year. This blog post gives the details for each event so you can add them to your calendar.</p>
            </div>
        </div>
    </section>
    
    <div class="row blockDisplay">
        <div class="column_half left_half">
            <h2 class="column_title"><a href="image-based-hyperlinks.php">RESOURCES </h2>
        </div>
        <div class="column_half right_half">
            <h2 class="column_title"><a href="News.php">ARTICLES</h2>
        </div>
        <div class="column_half left_half">
            <h2 class="column_title"><a href="blog.php">Blog </h2>
        </div>
        <div class="column_half right_half">
            <h2 class="column_title"><a href="image-based-hyperlinks.php">Sitemap </h2>
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

