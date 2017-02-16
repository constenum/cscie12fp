<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("inc/head.php"); ?>
    <link rel="stylesheet" href="css/bootstrap-modal-carousel.min.css">
</head>
<body>
<header>
    <?php include("inc/header.php"); ?>
</header>
<nav class="navbar navbar-default" role="navigation">
    <?php include("inc/navigation.php"); ?>
</nav>
<div class="box">
    <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">Eminent Jets
            <strong>Fleet Overview</strong>
        </h2>
        <hr>
        <p>Eminent Jets offers the largest floating charter fleet of Boeing, Bombardier, Cessna, Dassualt,
            Gulfstream, and Hawker private jets with the highest standards of safety and service in private
            aviation. Each private aircraft is custom-configured to exacting specifications, which include:</p>
        <ul>
            <li>Wi-Fi Internet Access</li>
            <li>Fully Stocked Bar</li>
            <li>Custom Meals</li>
            <li>In-Flight Attendant</li>
            <li>In-Flight Telephone</li>
            <li>Plus Many Other Amenities</li>
        </ul>
        <p>If one of our light, mid-size or heavy private jets isn't right for your specific needs—you need a different
            heavy jet, for example—we'll find you one that is through our preferred partner network. We partner with a
            carefully selected group of the best ARG/US Platinum-rated operators of small- and large-cabin private
            aircraft available. These partnerships allow us to offer you the most complete private jet solution in the
            industry.</p>
    </div>
</div>
<div class="box">
    <div class="col-lg-10 col-lg-offset-1">
        <hr>
        <h2 class="intro-text text-center">Eminent Jets
            <strong>Fleet Gallery</strong>
        </h2>
        <hr>
        <p>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" data-local="#myCarousel">
                <span class="glyphicon glyphicon-fullscreen"></span>
                <span>Display the images full screen</span>
            </button>
        </p>
        <div id="myCarousel" class="carousel slide carousel-fit" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/aircraft/bombardier_learJet_45.jpg" alt="Bombardier LearJet 45">
                    <div class="carousel-caption">
                        <h6>Bombardier LearJet 45</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/cessna_citation_M2.jpg" alt="Cessna Citation M2">
                    <div class="carousel-caption">
                        <h6>Cessna Citation M2</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/dassault_falcon_10.jpg" alt="Dassault Falcon 10">
                    <div class="carousel-caption">
                        <h6>Dassault Falcon 10</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/gulfstream_g150.jpg" alt="Gulfstreem G150">
                    <div class="carousel-caption">
                        <h6>Gulfstreem G150</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/hawker_400a.jpg" alt="Hawker 400A">
                    <div class="carousel-caption">
                        <h6>Hawker 400A</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/bombardier_learjet_75.jpg" alt="Third">
                    <div class="carousel-caption">
                        <h6>Bombardier LearJet 75</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/cessna_citation_xls.jpg" alt="Cessna Citation XLS">
                    <div class="carousel-caption">
                        <h6>Cessna Citation XLS</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/dassault_falcon_50.jpg" alt="Dassault Falcon 50">
                    <div class="carousel-caption">
                        <h6>Dassault Falcon 50</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/gulfstream_g250.jpg" alt="Gulfstream G250">
                    <div class="carousel-caption">
                        <h6>Gulfstream G250</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/hawker_4000.jpg" alt="Hawker 4000">
                    <div class="carousel-caption">
                        <h6>Hawker 4000</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/boeing_business_jet.jpg" alt="Boeing Business Jet MAX 8">
                    <div class="carousel-caption">
                        <h6>Boeing Business Jet MAX 8</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/bombardier_global_7000.jpg" alt="Bombardier Global 7000">
                    <div class="carousel-caption">
                        <h6>Bombardier Global 7000</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/cessna_citation_xplus.jpg" alt="Cessna Citation X+">
                    <div class="carousel-caption">
                        <h6>Cessna Citation X+</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/dassault_falcon_900b.jpg" alt="Dassault Falcon 900b">
                    <div class="carousel-caption">
                        <h6>Dassault Falcon 900b</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/embraer_lineage_1000.jpg" alt="Embrear Lineage 1000">
                    <div class="carousel-caption">
                        <h6>Embrear Lineage 1000</h6>
                    </div>
                </div>
                <div class="item">
                    <img src="img/aircraft/gulfstream_g550.jpg" alt="Gulfstream G550">
                    <div class="carousel-caption">
                        <h6>Gulfstream G550</h6>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <div class="modal fade modal-fullscreen force-fullscreen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Eminent Jets Aircraft</h4>
                    </div>
                    <div class="modal-body">
                        <p>Full Screen Slideshow</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php include("inc/footer.php"); ?>
</footer>

<!-- jQuery and Bootstrap JS -->
<script src="js/core/jquery.js"></script>
<script src="js/core/bootstrap.min.js"></script>

<!-- Bootstrap modal carousel JS -->
<script src="js/bootstrap-modal-carousel.min.js"></script>
<script src="js/gallery.js"></script>

</body>
</html>