<?php
include "header.php";
echo "Books Page";
require "dbConnect.php";
$db = get_db();
$book = $_POST["book"];

echo "THE book you picked was - " . $book;

foreach ($db->query('SELECT  b.title, a.name,  FROM book b, author a WHERE b.author = a.id') as $row)
{
    echo '<p>';
    echo '<b>';
    echo $row['title'];
    echo ' : ';
    echo $row['name'];
    echo '</b>';
    echo '<p/>';
}
?>
<div class="container">

</div>
