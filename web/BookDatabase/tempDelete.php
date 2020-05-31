<?php
include "header.php";
require "dbConnect.php";
$db = get_db();
$deleteBook = $_POST["delete-book"];
echo "The book you want to delete is: " .$deleteBook . "<br>";
$statement = $db->query("SELECT b.id, b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE b.id ='$deleteBook' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($results) > 0) {
    echo "<h1><b>The book </b></h1>";
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
        echo " has been deleted";
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