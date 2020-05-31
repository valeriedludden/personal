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
$query = 'INSERT INTO author(name) VALUES(:addAuthor)';
$statement = $db->prepare($query);
$statement->bindValue(':addAuthor', $addAuthor);

$statement->execute();


    $authorId = $db->lastInsertId("author_id_seq");


        $statement = $db->prepare("INSERT INTO book(title, author, genre, location) VALUES(:title, :authorId, :genreId, :locationid)");

        // Then, bind the values
        $statement->bindValue(':title', $addTitle);
        $statement->bindValue(':authorId', $authorId);
        $statement->bindValue(':genreId', $addGenre);
        $statement->bindValue(':locationId', $addLocation);
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
