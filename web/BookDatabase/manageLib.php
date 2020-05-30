<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

//$book = strtoupper($_POST["book"]);
//$statement = $db->query("SELECT b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE title ='$book' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
//$results = $statement->fetchAll(PDO::FETCH_ASSOC);


//try
//{
//    // Add the Scripture
//
//    // We do this by preparing the query with placeholder values
//
//    $statement = $db->prepare('INSERT INTO author(id, name) VALUES(DEFAULT, :addAuthor)');
//
//    // Now we bind the values to the placeholders. This does some nice things
//    // including sanitizing the input with regard to sql commands.
//    $statement->bindValue(':addAuthor', $addAuthor);
////    $statement->bindValue(':aID', $chapter);
////    $statement->bindValue(':verse', $verse);
////    $statement->bindValue(':content', $content);
//
//
//    $statement->execute();
//
//    // get the new id
////    $authorId = $db->lastInsertId("author_is_seq");
//// // Now go through each topic id in the list from the user's checkboxes
////
////        $statement = $db->prepare("INSERT INTO book(id, title, author, genre, location) VALUES(DEFAULT, ':title', :authorId, :genreId, :locationid)");
////
////        // Then, bind the values
////        $statement->bindValue(':title', $addTitle);
////        $statement->bindValue(':authorId', $authorId);
////        $statement->bindValue(':genreId', $addGenre);
////        $statement->bindValue(':locationId', $addLocation);
////
////        $statement->execute();
//}
//catch (Exception $ex)
//{
//    // Please be aware that you don't want to output the Exception message in
//    // a production environment
//    echo "Sorry there was a problem adding your book";
//}


?>
<div class="container">
    <div class="manTitle "><h1>Add a book to the library </h1></div>
    <div class="test">Hello World</div>
    <div class="addContainer">
        <form method="POST" action="newBook.php">
            <label class="addTitle" for="add-book">Title:</label>
            <input type="text" id="add-book" name="add-book" placeholder="Book Title"><br/>
            <label class="addTitle" for="add-author">Author</label>
            <input type="text" id="add-book" name="add-author" placeholder="Last, First"><br/>
            <label class="addTitle" for="add-genre">Pick a Genre</label>
            Comedy <input type="radio" name="add-genre" value=1></br>
            Biography <input type="radio" name="add-genre" value=2></br>
            Fiction <input type="radio" name="add-genre" value=3></br>
            Travel <input type="radio" name="add-genre" value=4></br>
            Art <input type="radio" name="add-genre" value=5></br>
            Childrens <input type="radio" name="add-genre" value=6></br>
            Cooking <input type="radio" name="add-genre" value=7></br>
            Health <input type="radio" name="add-genre" value=8></br>
            History <input type="radio" name="add-genre" value=9></br>
            Puzzles <input type="radio" name="add-genre" value=10></br>
            Home & Garden <input type="radio" name="add-genre" value=11></br>
            Poems <input type="radio" name="add-genre" value=12></br>
            Self Improvement <input type="radio" name="add-genre" value=13></br>
            Animals/Nature <input type="radio" name="add-genre" value=14></br>

            <label class="addTitle" for="add-location">Pick a Location:</label>
            Den Bookcase Left <input type="radio" name="add-location" value=1></br>
            Den Bookcase Right<input type="radio" name="add-location" value=2></br>
            Barrister Bookcase West<input type="radio" name="add-location" value=3></br>
            Barrister Bookcase East<input type="radio" name="add-location" value=4></br>
            Guest Bedroom Shelves<input type="radio" name="add-location" value=5></br>
            STE Michelle Shopping Bag<input type="radio" name="add-location" value=6></br>

            <input type="submit" value="Add Book"> <br/>
        </form>
    </div>
</div>
</body>
</html>

