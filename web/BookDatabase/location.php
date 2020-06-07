<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$location = $_POST["location"];
//$locationName = $db->query("SELECT l.location FROM location l WHERE l.id = $location");
$statement = $db->query("SELECT b.title, a.name, l.location, l.id, g.genre FROM book b, author a, location l, genre g WHERE l.location ='$location' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$locs = ['Den Bookcase Left','Den Bookcase Right', 'Barrister Bookcase West', 'Barrister Bookcase East', 'Guest Bedroom Shelves', 'STE Michelle Shopping Bag'];

echo "<h1>Below is a list of books located in the $locs[$location]</h1></br>";
echo "<b><div class='container'>
<ul class='list-group list-group-horizontal'>
        <li class='list-group-item g-one'>Title</li>
        <li class='list-group-item g-two'>Author</li>
        <li class='list-group-item g-three'>Genre</li>
    </ul>
</div></b>";

foreach ($results as $row) {
    echo "<div class='container'>
    <ul class='list-group list-group-horizontal'>
        <li class='list-group-item  g-one'>" . $row['title'] . "</li>
        <li class='list-group-item  g-two'>" . $row['name'] . "</li>
        <li class='list-group-item  g-three'>" . $row['genre'] . "</li>
    </ul>
</div>";

}
?>
</body>
</html>
