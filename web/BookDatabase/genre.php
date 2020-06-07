<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$genre = $_POST["genre"];
$query2 = "SELECT id, genre FROM genre WHERE genre = '$genre'";
$genId = $db->query($query2);
$gId = 0;
foreach ($genId as $g) {
    $gId = $g["id"];
}
$statement = $db->query("SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE b.genre ='$gId' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<h1>Below is a list of books in the " .  $results['genre']." genre</h1></br>";
echo "<b><div class='container'>
<ul class='list-group list-group-horizontal'>
        <li class='list-group-item g-one'>Title</li>
        <li class='list-group-item g-two'>Author</li>
        <li class='list-group-item g-three'>Location</li>
    </ul>
</div></b>";


foreach ($results as $row) {
    echo "<div class='container'>
    <ul class='list-group list-group-horizontal'>
        <li class='list-group-item g-one''>" . $row['title'] . "</li>
        <li class='list-group-item g-two''>" . $row['name'] . "</li>
        <li class='list-group-item g-three''>" . $row['location'] . "</li>
    </ul>
</div>";

}
?>
</body>
</html>
