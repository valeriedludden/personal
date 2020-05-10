<?php
//start session
session_start();
include "header.php"
?>
<body>
<div class="checkoutInformation">
    <form method="POST" action="success.php">
        <p>Please fill out the following information</p>

        <label for="fname">First Name</label>
        <input type="text" placeholder="First Name" id="fname" name="fname">
        <br />

        <label for="lname">Last Name</label>
        <input type="text" placeholder="Last Name" id="lname" name="lname">
        <br />

        <label for="address">Address</label>
        <input type="text" placeholder="Address" id="address" name="address">
        <br />
        <label for="city">City</label>
        <input type="text" placeholder="City" id="city" name="city">
        <br />
        <label for="state">State</label>
        <input type="text" placeholder="State" id="state" name="state">
        <br />
        <label for="zip">Zip Code</label>
        <input type="text" placeholder="Zip Code" id="zip" name="zip">
        <br />
        <input type="submit" value="Complete Checkout">
    </form>

</div>
