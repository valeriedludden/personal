<?php
include "header.php";
require "dbConnect.php";
$db = get_db();
$bId = $db->lastInsertId("book_id_seq");
$st = $db->query("SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE b.id = '$bId' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
$rs = $st->fetchAll(PDO::FETCH_ASSOC);

echo "The book you picked is: ";
foreach ($rs as $r) {
    ?>

    <p>Title: <?= $r['title'] ?> - </p>
    <p> *Author: <?= $r['name'] ?></p>
    <p> *Genre: <?= $r['genre'] ?></p><br>
    <p> *Location: <?= $r['location'] ?></p><br>
    <?php
}
?>
    </body>
    </html>
