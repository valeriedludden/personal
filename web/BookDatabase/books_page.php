<?php
include "header.php";
echo "Books Page";
require "dbConnect.php";
$db = get_db();

$book = $_POST["book"];
$dbbq = "SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE title ='$book' AND b.author = a.id AND b.location = l.id AND b.genre = g.id";


foreach ($db->query($dbbq) as $row)
{
    echo '<p>';
    echo '<b>';
    echo $row['title'];
    echo ' : author = ';
    echo $row['name'];
    echo ' : author = ';
    echo $row['location'];
    echo ' : location = ';
    echo $row['genre'];
    echo ' : genre = ';

    echo '</b>';
    echo '<p/>';
}


echo '<div class="container">

</div>'
?>