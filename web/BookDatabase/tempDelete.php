<?php
include "header.php";
require "dbConnect.php";
$db = get_db();
$deleteBook = $_POST["delete-book"];
$statement = $db->query("SELECT b.id, b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE b.id ='$deleteBook' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($results) > 0) {
    echo "<h1><b>The book </h1><br>";
    foreach ($results as $row) {
        ?>

        <h3><?= $row['title'] ?></h3><br>
        <h3>by <?= $row['name'] ?> </h3>


        <?php
        echo "<h1> has been deleted</h1>";
    }
    $statement = $db->prepare("DELETE FROM book WHERE id = '$deleteBook'");
    $statement->execute();
} else {
    echo "I am sorry, there is no book with that title in this library";
}


echo ''
?>
<div class="container">

</div>
</body>
</html>