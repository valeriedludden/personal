<?php
include "header.php";
require "dbConnect.php";

$db = get_db();

foreach ($db->query('SELECT b.title, l.location, a.name FROM book b, location l, author a WHERE b.author = a.id AND b.location = l.id') as $row)
{
    echo 'Title - ' . $row['title'] . ' ';
    echo 'Author - ' . $row['author'] . ' ';
    echo 'Location - ' . $row['location'] . '';
    echo '<br/>';
}
?>
<body>

<div class="container">

    <div class="card">
        <div class="card-header">
            Books by Title
        </div>
        <div class="card-body">
            <form method="POST" action="books_page.php">
                <label for="book">Search by Book:</label>
                <input type="text" id="book" name="book" placeholder="Book Title"><br />
                <input type="submit" value="Search for Book"> <br />
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Location
        </div>
        <div class="card-body">
            <form method="POST" action="location.php">
                <label for="location">Receive Newsletter:</label>
               Guest Room <input type="radio" name="location" value="Guest">
              East Book Shelf<input type="radio" name="location" value="East">
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Author
        </div>
        <div class="card-body">
            <form method="POST" action="authors.php">
                <label for="author">Search by Author:</label>
                <input type="text" id="author" name="author" placeholder="Author Name"><br />
                <input type="submit" value="Search for Author"> <br />
            </form>
        </div>
    </div>
</div>
