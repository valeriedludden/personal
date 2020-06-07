<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$addAuthor = $_POST['add-author'];
$addTitle = $_POST['add-title'];
$addLocation = $_POST['add-location'];
$addGenre = $_POST['add-genre'];

$st = $db->query('SELECT id, name FROM author ORDER by name');
$rs = $st->fetchAll(PDO::FETCH_ASSOC);
?>
<h1>Authors with Books in this Library</h1>
<div class="container">
    <ul class="list-group">
    <?php
    foreach ($rs as $r) {

        ?>
        <li class="authorList list-group-item"><?= $r['name'] ?></li>
        <?php
    }
    ?>
</div>
</ul>
</body>
</html>