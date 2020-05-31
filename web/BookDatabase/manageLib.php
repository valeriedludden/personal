<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

//$book = strtoupper($_POST["book"]);



?>
<div class="container">
    <div class="manTitle "><h1>Add a book to the library </h1></div>
    <div class="test">Hello World</div>
    <div class="addContainer">
        <form method="POST" action="tempAdd.php">
            <label class="addTitle" for="add-title">Title:</label>
            <input type="text" id="add-title" name="add-title" placeholder="Book Title"><br/>
            <label class="addTitle" for="add-author">Author</label>


            <input type="text" id="add-book" name="add-author" placeholder="Last, First"><br/>
            <label class="addTitle" for="add-genre">Pick a Genre</label>
<!--            Comedy <input type="radio" name="add-genre" value=1></br>-->
<!--            Biography <input type="radio" name="add-genre" value=2></br>-->
<!--            Fiction <input type="radio" name="add-genre" value=3></br>-->
<!--            Travel <input type="radio" name="add-genre" value=4></br>-->
<!--            Art <input type="radio" name="add-genre" value=5></br>-->
<!--            Childrens <input type="radio" name="add-genre" value=6></br>-->
<!--            Cooking <input type="radio" name="add-genre" value=7></br>-->
<!--            Health <input type="radio" name="add-genre" value=8></br>-->
<!--            History <input type="radio" name="add-genre" value=9></br>-->
<!--            Puzzles <input type="radio" name="add-genre" value=10></br>-->
<!--            Home & Garden <input type="radio" name="add-genre" value=11></br>-->
<!--            Poems <input type="radio" name="add-genre" value=12></br>-->
<!--            Self Improvement <input type="radio" name="add-genre" value=13></br>-->
<!--            Animals/Nature <input type="radio" name="add-genre" value=14></br>-->
            <input list="add-genre" name="add-genre">
            <datalist id="add-genre">
                <option value="Comedy"></option>
                <option value="Biography"></option>
                <option value="Fiction"></option>
                <option value="Travel"></option>
                <option value="Art"></option>
                <option value="Children Books"></option>
                <option value="Health"></option>
                <option value="History"></option>
                <option value="Puzzles"></option>
                <option value="Home & Garden"></option>
                <option value="Poems"></option>
                <option value="Self Improvement"></option>
                <option value="Animals & Nature"></option>
            </datalist>

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

