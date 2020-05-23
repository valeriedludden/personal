<?php
include "header.php";
echo "Books Page";
require "dbConnect.php";
$db = get_db();

$book = $_POST["book"];
$dbbq = "SELECT b.title, a.name FROM book b, author a WHERE title ='$book' AND b.author = a.id";


foreach ($db->query($dbbq) as $row)
{
    echo '<p>';
    echo '<b>';
    echo $row['title'];
    echo ' : author = ';
    echo $row['name'];
    echo '</b>';
    echo '<p/>';
}

?>
<div class="container">

</div>
