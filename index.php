<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>

<div id="signinheader">
    <h1>Please Sign in</h1>
</div>

<div id="HeroPIC"> 
    <img id="HeroPic" src="Images/HeroPic.jpg" alt="An image of mountains">
</div>

<main>
    <div id="signin">
        <form action="index.php" method="post">
            Please enter your name:<br>
            <input type="text" name="name" value=""><br><br>

            Enter your purpose:<br>
            <input type="radio" name="purpose" value="Employer"> Employer<br>
            <input type="radio" name="purpose" value="Friend"> Friend / Family<br>
            <input type="radio" name="purpose" value="Test"> Test<br>
            <input type="radio" name="purpose" value="Other"> Other<br>

            <input type="submit" name="Confirm" value="Confirm">
        </form>
    </div>
</main>

<?php
session_start();

if (isset($_POST["purpose"])) {

    $_SESSION['Purpose'] = $_POST["purpose"];
    $_SESSION['Name'] = $_POST["name"];

    $Name = $_POST["name"];
    $Purpose = $_POST["purpose"];

    // Display message based on purpose
    if ($Purpose == "Employer") {
        echo "<h4>Hello $Name.<br>Thank you for looking at my web resume.</h4>";
    } 
    else if ($Purpose == "Friend") {
        echo "<h4>What's up $Name? Whatcha doing here?</h4>";
    } 
    else if ($Purpose == "Other") {
        echo "<h4>Welcome $Name.</h4>";
    } 
    else if ($Purpose == "Test") {
        echo "<h4>This is for website testing and development.</h4>";
    }

    // Send email if not test
    if ($Purpose != "Test") {
        $msg = $Name . " visited your website as a(n) " . $Purpose . " on " . date("Y/m/d");
        $msg = wordwrap($msg, 70);

        mail("29Hdietz@gmail.com", "$Name visited your website!", $msg);
    }

    header("Location: home.php");
    exit(); // Always call exit() after header redirect

} else {
    echo "<h5>Please complete the form</h5>";
}
?>

<div id="filler"></div>
<footer id="SIfooter">
    <p>&copy; 2024 Hunter Dietzenbach — All rights reserved</p>
</footer>

</body>
</html>
