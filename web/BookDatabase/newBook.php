<?php
include "header.php";
require "dbConnect.php";
$db = get_db();
//$bId = $db->lastInsertId("book_id_seq");
$bId = $_SESSION["bookId"];
$st = $db->query("SELECT b.id, b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE b.id = '$bId' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
$rs = $st->fetchAll(PDO::FETCH_ASSOC);

if(count($rs) > 0){
    echo "<h1>The following book has been added:</h1>";
foreach ($rs as $r) {
    ?>

    <p>Title: <?= $r['title'] ?> - </p>
    <p> *Author: <?= $r['name'] ?></p>
    <p> *Genre: <?= $r['genre'] ?></p>
    <p> *Location: <?= $r['location'] ?></p>
    <?php
}}
else{
    echo " ***Sorry your book was not added";
}
session_unset();
?>
    </body>
    </html>
