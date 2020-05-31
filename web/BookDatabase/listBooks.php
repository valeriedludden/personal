<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$st = $db->query("SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE b.author = a.id AND b.location = l.id AND b.genre = g.id");
$rs = $st->fetchAll(PDO::FETCH_ASSOC);
echo "<h1>Books in the Library</h1>";
echo "<div>";

foreach ($rs as $r) {
    ?>
    <p>Title: <?= $r['title'] ?>   NAME: <?= $r['name'] ?>  Genre: <?= $r['genre'] ?> Location: <?= $r['location'] ?></p>
    <?php
}
?>
</div>
</body>
</html>