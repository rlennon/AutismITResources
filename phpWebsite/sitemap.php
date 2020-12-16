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
    .links {
        text-align: center;
        style-position: inside;
    }

    ul {
        text-align: ceneter;
        list-style-position: inside;

    }
    </style>
    <div class="container">
        <header>
            <?php include 'header.php';?>
            <?php include 'navBar.php';?>

        </header>

        <section class="links">
            <h2>Site Map</h2>

            <ul>

                <li><a href="image-based-hyperlinks.php">Image-Based Resources</li>


                <li><a href="index.php">Homepage</a></li>
                <li><a href="videoResources.php">Video Resources</a></li>
                <li><a href="FAQ.php">Frequnetly Asked Questions</a></li>
                <li><a href="staySecure.php">Staying Safe Advice</a></li>
                <li><a href="covidAdvice.php">Covid Safety Advice</a></li>
                <li><a href="covid-stats.php">Covid Stats</a></li>
                <li><a href="assistiveTechPage.php">Autistic Assistive Technologies</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="contactPage.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="News.php">Articles</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="userDetails.php">View User details</a></li>
                <li><a href="community.php">Comunity Page</a></li>


            </ul>


        </section>

        <div class="row blockDisplay">
            <div class="column_half left_half">
                <h2 class="column_title"><a href="image-based-hyperlinks.php">RESOURCES </h2>
            </div>
            <div class="column_half right_half">
                <h2 class="column_title"><a href="News.php">ARTICLES</h2>
            </div>
        </div>
        <div class="social">

            <p class="social_icon"><a href="facebook.com"><i class='fa fa-facebook'
                        style='font-size:60px;color:#52bad5;'></i></p>
            <p class="social_icon"><a href="twitter.com"><i class='fa fa-twitter'
                        style='font-size:60px;color:#52bad5;'></i></p>
            <p class="social_icon"><a href="instagram.com"><i class='fa fa-instagram'
                        style='font-size:60px;color:#52bad5;'></i></p>
            <p class="social_icon"><a href="youtube.com"><i class='fa fa-youtube'
                        style='font-size:60px;color:#52bad5;'></i></p>
        </div>
        <?php include 'footer.php';?>
    </div>
</body>

</html>