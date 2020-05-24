<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Personal Library</title><title>Valerie Ludden</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="hero">
        <img class="heroImage" src="assets/book.jpg" alt="Books">
    </div>
</div>
<ul class="nav">
    <li class="nav-item">
        <?php $library_link = "Library"; ?>
        <a class="nav-link links" href="library.php"><?php echo $library_link ?></a>
    </li>
    <li class="nav-item">
        <?php $book_link = "Books"; ?>
        <a class="nav-link links" href="books_page.php"><?php echo $book_link ?></a>
    </li>
    <li class="nav-item">
        <?php $author_link = "Authors"; ?>
        <a class="nav-link links" href="authors.php"><?php echo $author_link ?></a>
    </li>

</ul>
<br>

