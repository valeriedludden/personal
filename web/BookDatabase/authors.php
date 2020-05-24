<?php
include "header.php";
echo "Authors Page";
require "dbConnect.php";
$db = get_db();

$author = strtoupper($_POST["author"]);
$dbbq = "SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE a.name ='$author' AND b.author = a.id AND b.location = l.id AND b.genre = g.id";

echo "The author is - " . $author;
foreach ($db->query($dbbq) as $row)
{
    echo '<div class="container">
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
    </ul>
</div>';
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
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item">Bottop</li>
        <li class="list-group-item">zushduvhzdvxc</li>
        <li class="list-group-item">jkhdksfgksjdfhkjsdfks</li>
    </ul>
</div>';
?>

<ul class="list-group list-group-horizontal-md">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
</ul>