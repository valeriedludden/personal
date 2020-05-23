<?php
include "header.php";
require "dbConnect.php";

//$statement = $db->query('SELECT username, password FROM note_user');
//$results = $statement->fetchAll(PDO::FETCH_ASSOC);


$db = get_db();
//$dbArray = $db->query('SELECT title, location, author FROM book');
//$results = $dbArray->fetchAll(PDO::FETCH_ASSOC);
//foreach ($results as $row)
//{
//    echo 'Title - ' . $row['title'] . ' ';
//    echo 'Author - ' . $row['author'] . ' ';
//    echo 'Location - ' . $row['location'] . '';
//    echo '<br/>';
//}

foreach ($db->query('SELECT title, location, author FROM book') as $row)
{
    echo 'Title - ' . $row['title'] . ' ';
    echo 'Author - ' . $row['author'] . ' ';
    echo 'Location - ' . $row['location'] . '';
    echo '<br/>';
}
?>
<body>

<div class="container">
    <form method="POST">
        <label for="book">Book:</label>
        <input type="text" id="book" name="book"><br />
        <input type="submit" value="Submit"> <br />
    </form>
    </form>

</div>
