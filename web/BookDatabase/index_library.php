<?php
include "header.php";
require "dbConnect.php";
$db = get_db();
foreach ($db->query('SELECT title, location, author FROM book') as $row)
{
    echo 'Title - ' . $row['title'] . ' ';
    echo 'Author - ' . $row['author'] . ' ';
    echo 'Location - ' . $row['location'] . '';
    echo '<br/>';
}
?>
<body>

<div class="container">
    <form method="POST">
        <label for="book">Book:</label>
        <input type="text" id="book" name="book"><br />
        <input type="submit" value="Submit"> <br />
    </form>
    </form>

</div>
