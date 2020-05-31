<?php
include "header.php";
require "dbConnect.php";
$db = get_db();
$deleteTitle = strtoupper($_POST["delete-title"]);
echo "The book you want to delete is: " .$deleteTitle . "<br>";
$statement = $db->query("SELECT b.id, b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE b.title ='$deleteTitle' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($results) > 0) {
    echo "<h1><b>Is the the book you want to delete? </b></h1>";
    foreach ($results as $row) {
        ?>
        <div class='container'>
            <ul class='list-group list-group-horizontal'>
                <li class='list-group-item g-one'><?= $row['title'] ?></li>
                <li class='list-group-item g-two'><?= $row['name'] ?></li>
                <li class='list-group-item g-three'><?= $row['location'] ?></li>
                <li class='list-group-item g-three'><?= $row['genre'] ?></li>
            </ul>
        </div>

        <?php
    }
} else {
    echo "I am sorry, there is no book with that title in this library";
}


echo ''
?>
<div class="container">

</div>
</body>
</html>