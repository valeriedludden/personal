<?php
include "header.php";
require "dbConnect.php";

$db = get_db();
?>
<body>

<div class="libraryContainer">

    <div class="card">
        <div class="card-header">
            Books by Title
        </div>
        <div class="card-body">
            <form method="POST" action="books_page.php">
                <label for="book">Search by Book:</label>
                <input type="text" id="book" name="book" placeholder="Book Title"><br/>
                <input type="submit" value="Search for Book"> <br/>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Books by Author
        </div>
        <div class="card-body">
            <form method="POST" action="authors.php">
                <label for="book">Search by Book:</label>
                <input type="text" id="author" name="author" placeholder="Last, First"><br/>
                <input type="submit" value="Search Author"> <br/>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Location
        </div>
        <div class="card-body">
            <form method="POST" action="location.php">
                Den Bookcase Left <input type="radio" name="location" value=1></br>
                Den Bookcase Right<input type="radio" name="location" value=2></br>
                Barrister Bookcase West<input type="radio" name="location" value=3></br>
                Barrister Bookcase East<input type="radio" name="location" value=4></br>
                Guest Bedroom Shelves<input type="radio" name="location" value=5></br>
                STE Michelle Shopping Bag<input type="radio" name="location" value=6></br>
                <input type="submit" value="Search by Location"> <br/>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Genre
        </div>
        <div class="card-body">
            <form method="POST" action="genre.php">
                Comedy <input type="radio" name="genre" value=1></br>
                Biography <input type="radio" name="genre" value=2></br>
                Fiction <input type="radio" name="genre" value=3></br>
                Travel <input type="radio" name="genre" value=4></br>
                Art <input type="radio" name="genre" value=5></br>
                Childrens <input type="radio" name="genre" value=6></br>
                Cooking <input type="radio" name="genre" value=7></br>
                Health <input type="radio" name="genre" value=8></br>
                History <input type="radio" name="genre" value=9></br>
                Puzzles <input type="radio" name="genre" value=10></br>
                Home & Garden <input type="radio" name="genre" value=11></br>
                Poems <input type="radio" name="genre" value=12></br>
                Self Improvement <input type="radio" name="genre" value=13></br>
                Animals/Nature <input type="radio" name="genre" value=14></br>
                <input type="submit" value="Search by Genre"> <br/>
            </form>
        </div>
    </div>


</div>
