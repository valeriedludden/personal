<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$st = $db->query("SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE b.author = a.id AND b.location = l.id AND b.genre = g.id");
$rs = $st->fetchAll(PDO::FETCH_ASSOC);
//$lastBookId = $db->lastInsertId("book_id_seq");
//echo "The last Author ID is: ";
//echo $lastBookId;

foreach ($rs as $r) {

    ?>

    <p>Title: <?= $r['title'] ?> - NAME: <?= $r['name'] ?> Genre: <?= $r['genre'] ?> </p><br>

    <?php
}

?>
</body>
</html>