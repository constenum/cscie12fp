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
<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Eminent Jets
                    <strong>Reservation</strong>
                </h2>
                <hr>
                <form role="form" method="post" action="http://cscie12.dce.harvard.edu/echo">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <?php echo $result; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label for="from">Depart From</label>
                            <select name="from">
                                <option value="" disabled selected>Departure Airport</option>
                                <option disabled>───────────────────</option>
                                <option value="Akron/Canton">CAK - Akron/Canton</option>
                                <option value="Cincinnati">LUK - Cincinnati/N. Kentucky International</option>
                                <option value="Cleveland">CLE - Cleveland-Hopkins International</option>
                                <option value="Columbus">CHM - Columbus International</option>
                                <option value="Dayton">DAY - Dayton International</option>
                                <option value="Toledo">TOL - Toledo Express</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="to">Destination</label>
                            <select name="to">
                                <option value="" disabled selected>Destination Airport</option>
                                <option disabled>───────────────────</option>
                                <optgroup label="Domestic">
                                    <option value="Chicago">ORD - Chicago O'Hare International</option>
                                    <option value="Dallas">DFW - Dallas/Fort Worth International</option>
                                    <option value="Denver">DEN - Denver International</option>
                                    <option value="Los Angeles">LAX - Los Angeles International</option>
                                    <option value="Miami">MIA - Miami International</option>
                                    <option value="New York">JFK - John F. Kennedy International</option>
                                </optgroup>
                                <optgroup label="International">
                                    <option value="London">LHR - London Heathrow</option>
                                    <option value="Melbourne">MEL - Mebourne Airport</option>
                                    <option value="Sao Paulo">GRU - São Paulo International</option>
                                    <option value="Tokyo">HND - Tokyo International</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="depart">Departure Date</label>
                            <input type="date" class="form-control" name="depart" placeholder="01/01/1980">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="return">Return Date</label>
                            <input type="date" class="form-control" name="return" placeholder="01/02/1980">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label for="size">Aircraft Size</label>
                            <select name="size">
                                <option value="" disabled selected>Select Aircraft Size</option>
                                <option disabled>───────────────────</option>
                                <option value="small">Light Aircraft</option>
                                <option value="medium">Mid-size Aircraft</option>
                                <option value="large">Heavy Aircraft</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="model">Aircraft Model</label>
                            <select name="model">
                                <option value="" disabled selected>Select Aircraft Model</option>
                                <option disabled>───────────────────</option>
                                <optgroup label="Light Aircraft">
                                    <option value="BLJ45">Bombardier LearJet 45</option>
                                    <option value="CCM2">Cessna Citation M2</option>
                                    <option value="DF10">Dassault Falcon 10</option>
                                    <option value="G150">Gulfstream G150</option>
                                    <option value="H400">Hawker 400a</option>
                                </optgroup>
                                <optgroup label="Mid-size Aircraft">
                                    <option value="BLJ75">Bombardier LearJet 75</option>
                                    <option value="CCXLS">Cessna Citation XLS</option>
                                    <option value="DF50">Dassault Falcon 50</option>
                                    <option value="G250">Gulfstream G250</option>
                                    <option value="H4000">Hawker 4000</option>
                                </optgroup>
                                <optgroup label="Heavy Aircraft">
                                    <option value="BBJMAX8">Boeing Business Jet MAX 8</option>
                                    <option value="BG7000">Bombardier Global 7000</option>
                                    <option value="CCX">Cessna Citation X+</option>
                                    <option value="DF900">Dassault Falcon 900b</option>
                                    <option value="G550">Gulfstream G550</option>
                                    <option value="EL1000">Embrear Lineage 1000</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="passenger">Passengers</label>
                            <input type="number" class="form-control" name="passenger" placeholder="Number of Passengers">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="bags">Luggage</label>
                            <input type="number" class="form-control" name="bags" placeholder="Number of Bags to be Stowed">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <input id="submit" name="submit" type="submit" value="Submit Reservation" class="btn btn-primary">
                        </div>
                    </div>
                </form>
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

</body>
</html>