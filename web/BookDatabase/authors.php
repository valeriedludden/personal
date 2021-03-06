<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$author = strtoupper($_POST["author"]);
$statement = $db->query("SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE a.name ='$author' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

if(count($results) > 0){
    echo "<h1>Below is a list of books by  $author </h1>";
    echo "<b><div class='container'>
<ul class='list-group list-group-horizontal'>
        <li class='list-group-item g-one'>Title</li>
        <li class='list-group-item g-two'>Location</li>
        <li class='list-group-item g-three'>Genre</li>
    </ul>
</div></b>";
}
else{
    echo "<h1>Sorry there are no books by $author in this library</h1>";
}

foreach ($results as $row)
{
    echo "<div class='container'>
    <ul class='list-group list-group-horizontal'>
        <li class='list-group-item g-one'>" .$row['title']."</li>
        <li class='list-group-item g-two'>" .$row['location']."</li>
        <li class='list-group-item g-three'>" .$row['genre']."</li>
    </ul>
</div>";

}
?>
</body>
</html>
