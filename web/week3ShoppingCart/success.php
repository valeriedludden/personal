<?php
include "header.php";
?>
<?php
$fname = htmlspecialchars($_POST["fname"]);
$lname = htmlspecialchars($_POST["lname"]);
$address = htmlspecialchars($_POST["address"]);
$city = htmlspecialchars($_POST["city"]);
$state = htmlspecialchars($_POST["state"]);
$zip = htmlspecialchars($_POST["zip"]);
?>
<body>
<div>
    <h1>Thank you <?= $fname ?>!</h1>
    <div>Your purchase will be shipped to: <?= $address ?> <?= $city ?>, <?= $state ?>  <?= $zip ?></div>
</div>
</body>
</html>

