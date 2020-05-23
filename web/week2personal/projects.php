<!DOCTYPE html>
<html>
<head>
    <title>Projects Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../week2personal/styles.css">
</head>
<body>
    <h1>Under construction....more projects coming soon</h1>
    <img class="spic" src="construction.jpg">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
            <?php $shopping_cart_link = "Shopping Cart"; ?>
            <a class="nav-link links" href="../week3ShoppingCart/browse.php"><?php echo $shopping_cart_link ?></a>
        </li>
        <li class="nav-item">
            <?php $db_link = "Database Project 1"; ?>
            <a class="nav-link links" href="../BookDatabase/index_library.php"><?php echo $db_link ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Other Stuff</a>
        </li>
    </ul>
</body>
</html>
