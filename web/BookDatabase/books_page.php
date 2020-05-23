<?php
include "header.php";
echo "Books Page";
require "dbConnect.php";
$db = get_db();
//$book = "EMMA";
$book = $_POST["book"];
$dbq = "SELECT title, author FROM book WHERE title = $book";

echo "THE book you picked was - " . $book;
//$bookQuery = 'SELECT title, author FROM book WHERE title=';

//foreach ($db->query('SELECT title, author FROM book') as $row)
foreach ($db->query($dbq) as $row)
//foreach ($db->query('SELECT title, author FROM book WHERE title ="$book"' ) as $row)
//foreach ($db->query($bookQuery . $book) as $row)
//foreach ($db->query('SELECT b.title, a.name FROM book b, author a WHERE b.author = a.id AND b.location = l.id') as $row)
//foreach ($db->query('SELECT  b.title, a.name,  FROM book b, author a WHERE b.author = a.id') as $row)
{
    echo '<p>';
    echo '<b>';
    echo $row['title'];
    echo ' : author id = ';
    echo $row['author'];
    echo '</b>';
    echo '<p/>';
}
?>
<div class="container">

</div>
