<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>New sign up</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Please fill out info</h1>
<form method="POST" action="signIn.php">
    <label>User Name:</label>
    <input type="text"  name="name" placeholder="user name"><br>
    <label>Password:</label>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" value="Create new account">
</form>

</body>
</html>
