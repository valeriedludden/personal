<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Personal Library</title><title>Valerie Ludden</title>

    <meta charset="utf-8">
    <meta name="viewport">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="hero">
        <img class="heroImage" src="assets/book.jpg" alt="Books">
    </div>
</div>
<ul class="nav">
    <li class="nav-item">
        <?php $library_link = "Search Library"; ?>
        <a class="nav-link links" href="library.php"><?php echo $library_link ?></a>
    </li>
    <li class="nav-item">
        <?php $addBook_link = "Add New Book"; ?>
        <a class="nav-link links" href="addBook.php"><?php echo $addBook_link ?></a>
    </li>
    <li class="nav-item">
        <?php $deleteBook_link = "Delete A Book"; ?>
        <a class="nav-link links" href="deleteBook.php"><?php echo $deleteBook_link ?></a>
    </li>
    <li class="nav-item">
        <?php $a_link = "Authors"; ?>
        <a class="nav-link links" href="authorList.php"><?php echo $a_link ?></a>
    </li>
    <li class="nav-item">
        <?php $b_link = "Book List"; ?>
        <a class="nav-link links" href="listBooks.php"><?php echo $b_link ?></a>
    </li>

</ul>
<br>

