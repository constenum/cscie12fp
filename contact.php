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

<?php
if ($_POST["submit"]) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $to = 'mmiller01@g.harvard.edu';
    $subject = 'Question/Comment from Website';

    $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";

    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if phone has been entered
    if (!$_POST['phone']) {
        $errPhone = 'Please enter your phone number';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your question or comment';
    }

    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errPhone && !$errMessage) {
        if (mail($to, $subject, $body)) {
            $result = '<div class="alert alert-success">Thank you for contacting Eminent Jets! We will reply to all questions and any comment, if necessary.</div>';
        } else {
            $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
    }
}
?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contact
                    <strong>Eminent Jets</strong>
                </h2>
                <hr>
                <p>Do you have a question or comment for us? Please complete the form below to let us know.</p>
                <form role="form" method="post" action="contact.php">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <?php echo $result; ?>
                            </div>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your first and last name">
                            <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com">
                            <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="phone">Phone Number</label>
                            <input type="tel" class="form-control" name="phone" placeholder="(800) 555-1234">
                            <?php echo "<p class='text-danger'>$errPhone</p>";?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label for="message">Question/Comment</label>
                            <textarea class="form-control" rows="6" name="message"></textarea>
                            <?php echo "<p class='text-danger'>$errMessage</p>";?>
                        </div>
                        <div class="form-group col-lg-12">
                            <input id="submit" name="submit" type="submit" value="Submit Question/Comment" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Eminent Jets
                    <strong>Headquarter</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-8">
                <div id="headquarter"></div>
            </div>
            <div class="col-md-4">
                <p>Phone:
                    <strong>800.555.1234</strong>
                </p>
                <p>Email:
                    <strong><a href="mailto:name@example.com">info@eminentjets.com</a></strong>
                </p>
                <p>Address:
                    <strong>11501 W Airport Service Rd
                        <br>Swanton, OH 43558</strong>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<footer>
    <?php include("inc/footer.php"); ?>
</footer>

<!-- jQuery and Bootstrap JS -->
<script src="js/core/jquery.js"></script>
<script src="js/core/bootstrap.min.js"></script>

<!-- Google Maps JavaScript API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-- Google Maps JavaScript -->
<script src="js/maps/headquarter.js"></script>

</body>
</html>