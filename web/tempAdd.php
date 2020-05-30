<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$addAuthor = $_POST['add-author'];
$addTitle = $_POST['add-title'];
$addLocation = $_POST['add-location'];
$addGenre = $_POST['add-genre'];


try
{
    // Add the Scripture
$query = 'INSERT INTO author(id, name) VALUES(DEFAULT, :addAuthor)';
$statement = $db->prepare($query);



    // Now we bind the values to the placeholders. This does some nice things
    // including sanitizing the input with regard to sql commands.
    $statement->bindValue(':addAuthor', $addAuthor);
//    $statement->bindValue(':aID', $chapter);
//    $statement->bindValue(':verse', $verse);
//    $statement->bindValue(':content', $content);


    $statement->execute();

    // get the new id
//    $authorId = $db->lastInsertId("author_is_seq");
// // Now go through each topic id in the list from the user's checkboxes
//
//        $statement = $db->prepare("INSERT INTO book(id, title, author, genre, location) VALUES(DEFAULT, ':title', :authorId, :genreId, :locationid)");
//
//        // Then, bind the values
//        $statement->bindValue(':title', $addTitle);
//        $statement->bindValue(':authorId', $authorId);
//        $statement->bindValue(':genreId', $addGenre);
//        $statement->bindValue(':locationId', $addLocation);
//
        $statement->execute();
}
catch (Exception $ex)
{
    // Please be aware that you don't want to output the Exception message in
    // a production environment
    echo "Sorry there was a problem adding your book because " . $ex;
    die();
}
header("Location: newBook.php");
die();
?>
