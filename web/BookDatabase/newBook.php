<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$addAuthor = $_POST['add-author'];
$addTitle = $_POST['add-title'];
$addLocation = $_POST['add-location'];
$addGenre = $_POST['add-genre'];

$stuff = "Heelo Stuff";

echo "Results";
echo $stuff;

//$bId = $db->lastInsertId("author_id_seq");
//echo $bId;

//$query = "SELECT (b. id, b.title, a.name, l.location, g.genre) FROM book b, author a, location l, genre g WHERE b.id ='$bId' AND b.author = a.id AND b.location = l.id AND b.genre = g.id)";
//$query = "SELECT (id, name) FROM author";
$st = $db->query('SELECT id, name FROM author');
$rs = $st->fetchAll(PDO::FETCH_ASSOC);

foreach ($rs as $r) {

   ?>
    <!--    <div>-->
<!--    <h1>Stuff: --><?//= $stuff ?><!-- - </h1>-->
    <p>ID: <?=$r['id'] ?> - </p>
    <p>NAME: <?=$stuff ?></p><br>
    <p>NAME: <?=$r['name'] ?></p><br>
    <!--        <h1>Title: --><?//= $row['b.title'] ?><!--</h1><br>-->
    <!--        <h1>Author: --><?//= $row['a.name'] ?><!--</h1><br>-->
    <!--        <h1>Location: --><?//= $row['l.location'] ?><!--</h1><br>-->
    <!--        <h1>Genre: --><?//= $row['g.genre'] ?><!--</h1><br>-->
    <!--    </div>-->
    <!--    -->
    </body>
    </html>
    <?php
}
//session_unset();
?>