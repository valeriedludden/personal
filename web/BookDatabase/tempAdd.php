<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

$addAuthor = $_POST['add-author'];
$addTitle = $_POST['add-title'];
$addLocation = $_POST['add-location'];
$addGenre = $_POST['add-genre'];
echo "Genre - ";
echo $addGenre;
echo " Author - ";
echo $addAuthor;
echo " Location - ";
echo $addLocation;
echo " Title - ";
echo $addTitle;
echo " Your genre id is ";
$query2 = "SELECT id, genre FROM genre WHERE genre = '$addGenre'";
$genId =  $db->query($query2);
$gId = 0;
    foreach ($genId as $g) {
        $gId = $g["id"];
}




try
{
    // Add the Scripture
$query = 'INSERT INTO author(name) VALUES(:addAuthor)';
$statement = $db->prepare($query);
$statement->bindValue(':addAuthor', $addAuthor);


$statement->execute();


//    $authorId = 150;
    $authorId = $db->lastInsertId("author_id_seq");


        $statement = $db->prepare("INSERT INTO book(title, author, genre, location) VALUES(:title, :authorId, :genreId, :locationId)");

        // Then, bind the values
        $statement->bindValue(':title', $addTitle);
        $statement->bindValue(':authorId', $authorId);
        $statement->bindValue(':genreId', $gId);
        $statement->bindValue(':locationId', $addLocation);

        $statement->execute();

    $bookId = $db->lastInsertId("book_id_seq");
//    $statement->execute();


}
catch (Exception $ex)
{
    // Please be aware that you don't want to output the Exception message in
    // a production environment
    echo "Sorry there was a problem adding your book because " . $ex;
    die();
}
$_SESSION['bookId'] = $bookId;
header("Location: newBook.php");
die();
?>
