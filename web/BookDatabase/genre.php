<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$genre = $_POST["genre"];
echo $genre;
echo "Genre 1". $genre;
//$query2 = "SELECT id, genre FROM genre WHERE genre = '$genre'";
//
//$genId = $db->query($query2);
//echo "Genre 2". $genId;
//$gId = 0;
//foreach ($genId as $g) {
//    $gId = $g["id"];
//    echo "Genre 3". $gId;
//}
$statement = $db->query("SELECT b.title, a.name, l.location, g.genre, g.id FROM book b, author a, location l, genre g WHERE g.genre ='$genre' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
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
