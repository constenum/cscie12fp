<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("inc/head.php"); ?>
</head>
<body>
<header>
    <?php include("inc/header.php"); ?>
</header>
<nav class="navbar navbar-default" role="navigation">
    <?php include("inc/navigation.php"); ?>
</nav>
<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Travel and Aviation
                <strong>News</strong>
            </h2>
            <hr>
        </div>
        <div class="col-lg-10 col-lg-offset-1 text-center">
            <div class="feedgrabbr_widget" id="fgid_ad87b895591e69dc3efba202c"></div>
        </div>
    </div>
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Eminent Jets
                <strong>Company News</strong>
            </h2>
            <hr>
        </div>
        <div class="col-md-3 col-md-offset-1 text-center">
            <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
        </div>
        <div class="col-md-6 col-md-offset-1">
            <h2>Website Redesign
                <br>
                <small>May 11, 2015</small>
            </h2>
            <p>May 11, 2015 sees the redesign of our website. Take a look around and let us know what you think.</p>
            <a href="150511.php" class="btn btn-primary btn-lg">Read More</a>
        </div>
        <div class="col-lg-12">
            <hr>
        </div>
        <div class="col-md-3 col-md-offset-1 text-center">
            <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
        </div>
        <div class="col-md-6 col-md-offset-1">
            <h2>10,000th Passenger
                <br>
                <small>January 5, 2015</small>
            </h2>
            <p>Eminent carries its 10,000th passenger.</p>
            <a href="150105.php" class="btn btn-primary btn-lg">Read More</a>
        </div>
        <div class="col-lg-12">
            <hr>
        </div>
        <div class="col-md-3 col-md-offset-1 text-center">
            <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
        </div>
        <div class="col-md-6 col-md-offset-1">
            <h2>2,500th Flight
                <br>
                <small>September 21, 2014</small>
            </h2>
            <p>Eminent Jets has an aircraft liftoff for the 2,500th time since opening in December 2012.</p>
            <a href="140921.php" class="btn btn-primary btn-lg">Read More</a>
        </div>
        <div class="col-lg-12">
            <hr>
        </div>
        <div class="col-lg-12 text-center">
            <ul class="pager">
                <li class="next"><a href="news1.php">Older &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<footer>
    <?php include("inc/footer.php"); ?>
</footer>

<!-- jQuery and Bootstrap JS -->
<script src="js/core/jquery.js"></script>
<script src="js/core/bootstrap.min.js"></script>

<!-- Live News Feed JS -->
<script> if (typeof(fg_widgets) === "undefined") fg_widgets = new Array();
    fg_widgets.push("fgid_ad87b895591e69dc3efba202c");</script>
<script src="http://www.feedgrabbr.com/widget/fgwidget.js"></script>

</body>
</html>