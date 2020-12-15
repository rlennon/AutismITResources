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

            <article class="container" style="font-family: 'Source Sans Pro';">
                <h2 style='text-align: center;'>Covid Statistics</h2>
                <hr>
                <div style="margin-bottom: 50px;">
                    <h3 style='text-align: center;'>Cases</h3>
                    <iframe src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map" width="100%"
                        height="600px"></iframe>

                </div>
                <hr>
                <div style="margin-bottom: 50px;">
                    <h3 style='text-align: center;'>Tests</h3>
                    <iframe
                        src="https://ourworldindata.org/grapher/full-list-cumulative-total-tests-per-thousand?region=World"
                        style="width: 100%; height: 600px; border: 0px none;"></iframe>

                </div>
                <hr>
                <div style="margin-bottom: 50px;">
                    <h3 style='text-align: center;'>Positive Rate</h3>
                    <iframe
                        src="https://ourworldindata.org/grapher/covid-19-positive-rate-bar?stackMode=absolute&time=latest&region=World"
                        loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>

                </div>
                <hr>
                <div style="margin-bottom: 50px;">
                    <h3 style='text-align: center;'>Deaths</h3>
                    <iframe
                        src="https://ourworldindata.org/grapher/total-deaths-covid-19?country=Europe+USA+SouthAmerica+Africa+Asia+AUS"
                        style="width: 100%; height: 600px; border: 0px none;"></iframe>

                </div>

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