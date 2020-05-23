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
    <div class="search">
        <form method="POST" action="books_page.php">
            <label for="book">Search by Book:</label>
            <input type="text" id="book" name="book" placeholder="Book Title"><br />
            <input type="submit" value="Search for Book"> <br />
        </form>
    </div>
    <div class="search">
        <form method="POST" action="authors.php">
            <label for="author">Search by Author:</label>
            <input type="text" id="author" name="author" placeholder="Author Name"><br />
            <input type="submit" value="Search for Author"> <br />
        </form>
    </div>
    <div class="search">
        <form method="POST" action="location.php">
            <label for="book">Search by Location:</label>
            <input type="text" id="location" name="book" placeholder="Location"><br />
            <input type="submit" value="Search by Location"> <br />
        </form>
    </div>
</div>