<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$st = $db->query("SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE b.author = a.id AND b.location = l.id AND b.genre = g.id ORDER by b.title");
$rs = $st->fetchAll(PDO::FETCH_ASSOC);
echo "<h1>Books in the Library</h1>";
echo "<div>";

//foreach ($rs as $r) {
//    ?>
<!--    <p>Title: --><?//= $r['title'] ?><!--  * Author: --><?//= $r['name'] ?><!--  * Genre: --><?//= $r['genre'] ?><!-- * Location: --><?//= $r['location'] ?><!--</p>-->
<!--    --><?php
//}
//?>
<div class="container1">
    <ul class="list-group list-group-horizontal">
        <li class="authorList list-group-item title l-one">Title</li>
        <li class="authorList list-group-item title l-two">Author</li>
        <li class="authorList list-group-item title l-three">Genre</li>
        <li class="authorList list-group-item title l-three">Location</li>
    </ul>

        <?php
        foreach ($rs as $r) {

            ?>
    <ul class="list-group list-group-horizontal">
            <li class="authorList list-group-item l-one"><?= $r['title'] ?></li>
            <li class="authorList list-group-item l-two"><?= $r['name'] ?></li>
            <li class="authorList list-group-item l-three"><?= $r['genre'] ?></li>
            <li class="authorList list-group-item l-three"><?= $r['location'] ?></li>
    </ul>
            <?php
        }
        ?>
</div>
</ul>
</body>
</html>