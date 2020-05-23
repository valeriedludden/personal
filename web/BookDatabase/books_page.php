<?php
include "header.php";
echo "Books Page";
require "dbConnect.php";
$db = get_db();
$book1 = 'EMMA';
$book = $_POST["book"];
//$dbq = "SELECT title, author FROM book";
$dbq = "SELECT b.title, a.name FROM book b, author a WHERE title ='$book' AND b.author = a.id";
$dbq1 = "SELECT title, author FROM book WHERE title = '$book'";
$dbq2 = "SELECT title, author FROM book WHERE title = '$book1'";

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
    echo $row['name'];
    echo '</b>';
    echo "the first one";
    echo '</b>';
    echo '<p/>';
}

foreach ($db->query($dbq1) as $row)
{
    echo '<p>';
    echo '<b>';
    echo $row['title'];
    echo ' : author id = ';
    echo $row['author'];
    echo '</b>';
    echo "the second one";
    echo '</b>';
    echo '<p/>';
}


foreach ($db->query($dbq2) as $row)
{
echo '<p>';
    echo '<b>';
        echo $row['title'];
        echo ' : author id = ';
        echo $row['author'];
        echo '</b>';
    echo "the third one";
    echo '</b>';
    echo '<p/>';
}
?>
<div class="container">

</div>
