<?php
include "header.php";
require "dbConnect.php";
$db = get_db();

?>
<div class="manContainer">
    <div class="manTitle "><h1>Add a book to the library </h1></div>
    <div class="addContainer">
        <form method="POST" action="tempAdd.php">
            <label class="addTitle" for="add-title">Title:</label>
            <input type="text" id="add-title" name="add-title" placeholder="Book Title"><br/>
            <label class="addTitle" for="add-author">Author</label>
            <input type="text" id="add-book" name="add-author" placeholder="Last, First"><br/>
            <label class="addTitle" for="add-genre">Pick a Genre</label>

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
            </datalist><br>

            <label class="addTitle" for="add-location">Pick a Location:</label><br>
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

