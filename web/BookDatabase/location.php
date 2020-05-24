<?php
include "header.php";
echo "Location Page";
require "dbConnect.php";
$db = get_db();

$location = strtoupper($_POST["location"]);
$dbbq = "SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE b.location ='$location' AND b.author = a.id AND b.location = l.id AND b.genre = g.id";


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


?>
<div class="container">

</div>
