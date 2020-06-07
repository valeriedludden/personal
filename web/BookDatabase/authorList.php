<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$addAuthor = $_POST['add-author'];
$addTitle = $_POST['add-title'];
$addLocation = $_POST['add-location'];
$addGenre = $_POST['add-genre'];

$st = $db->query('SELECT id, name FROM author');
$rs = $st->fetchAll(PDO::FETCH_ASSOC);
echo '<h1>Authors with Books in this Library</h1>
<ul>';
foreach ($rs as $r) {

    ?>
    <li class="authorList"><?=$r['name'] ?></li><br>
    <?php
}
?>
</ul>
</body>
</html>