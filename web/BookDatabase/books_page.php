<?php
include "header.php";

require "dbConnect.php";
$db = get_db();

$book = strtoupper($_POST["book"]);
$statement = $db->query("SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE title ='$book' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

if(count($results) > 0){
    echo "Here is information on the book you searched for ";
    echo "<b><div class='container'>
<ul class='list-group list-group-horizontal'>
        <li class='list-group-item g-one'>Title</li>
        <li class='list-group-item g-two'>Author</li>
        <li class='list-group-item g-three'>Location</li>
        <li class='list-group-item g-three'>Genre</li>
    </ul>
</div></b>";
}
else {
    echo "I am sorry, there is no book with that title in this library";
}


foreach ($results as $row)
{
    echo "<div class='container'>
    <ul class='list-group list-group-horizontal'>
        <li class='list-group-item g-one''>" . $row['title'] . "</li>
        <li class='list-group-item g-two''>" . $row['name'] . "</li>
        <li class='list-group-item g-three''>" . $row['location'] . "</li>
        <li class='list-group-item g-three''>" . $row['genre'] . "</li>
    </ul>
</div>";
}


echo ''
?>
<div class="container">

</div>
</body>
</html>
