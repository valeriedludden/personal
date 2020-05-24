<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$location = $_POST["location"];
$locationName = $db->query("SELECT l.location FROM location l WHERE l.id = $location");
$statement = $db->query("SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE l.id ='$location' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<h1>Below is a list of books located in $locationName </h1></br>";
echo "<ul class='list-group list-group-horizontal'>
        <li class='list-group-item'>Title</li>
        <li class='list-group-item'>Author</li>
        <li class='list-group-item'>Genre</li>
    </ul>
</div>";

foreach ($results as $row)
{
    echo "<div class='container'>
    <ul class='list-group list-group-horizontal'>
        <li class='list-group-item'>" .$row['title']."</li>
        <li class='list-group-item'>" .$row['name']."</li>
        <li class='list-group-item'>" .$row['genre']."</li>
    </ul>
</div>";

}
?>
</body>
</html>
