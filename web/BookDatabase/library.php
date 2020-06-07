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
                <input type="submit" class="sub" value="Search for Book"> <br/>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Books by Author
        </div>
        <div class="card-body">
            <form method="POST" action="authors.php">
                <label for="book">Search by Author:</label>
                <input type="text" id="author" name="author" placeholder="Last, First"><br/>
                <input type="submit" class="sub" value="Search Author"> <br/>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Location
        </div>
        <div class="card-body">
            <form method="POST" action="location.php">
                <div class="radioLeft">
                    <label for="book">Search by Location:</label>
                    <input list="location" name="location">
                    <datalist id="location">
                        <option value="Bookcase in Den Right"></option>
                        <option value="Barrister Bookcase West"></option>
                        <option value="Barrister Bookcase"></option>
                        <option value="Guest Bedroom"></option>
                        <option value="STE Michelle Shopping Bag"></option>
                    </datalist><br>
                <input type="submit" class="sub" value="Search by Location"> <br/>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Genre
        </div>
        <div class="card-body radioLeft">
            <form method="POST" action="genre.php">
                <label for="book">Search by Genre:</label>
                <input list="genre" name="genre">
                <datalist id="genre">
                    <option value="Comedy"></option>
                    <option value="Biography"></option>
                    <option value="Fiction"></option>
                    <option value="Travel"></option>
                    <option value="Art"></option>
                    <option value="Children Books"></option>
                    <option value="Cooking"></option>
                    <option value="Health"></option>
                    <option value="History"></option>
                    <option value="Puzzles"></option>
                    <option value="Home & Garden"></option>
                    <option value="Poems"></option>
                    <option value="Self Improvement"></option>
                    <option value="Animals & Nature"></option>
                </datalist><br>
                <input type="submit" class="sub" value="Search by Genre"> <br/>
            </form>
        </div>
    </div>
</div>
