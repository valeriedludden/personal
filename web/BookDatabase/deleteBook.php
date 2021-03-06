<?php
include "header.php";
require "dbConnect.php";
$db = get_db();
if (!isset($_POST['delete-title'])) {
    ?>
    <div class="deleteContainer">
        <div class="manTitle "><h1>Delete a book from the library </h1></div>
        <div>
            <!--        <form method="POST" action="tempDelete.php">-->
            <form method="POST">
                <label for="delete-title">Title of Book to Delete:</label>
                <input type="text" id="delete-title" name="delete-title" placeholder="Book Title"><br/>
                <input type="submit" value="Delete Book"> <br/>
            </form>
        </div>
    </div>

    <?php
}
$deleteTitle = strtoupper($_POST["delete-title"]);
$statement = $db->query("SELECT b.id, b.title, a.name, l.location, g.genre FROM book b, author a, location l, genre g WHERE b.title ='$deleteTitle' AND b.author = a.id AND b.location = l.id AND b.genre = g.id");
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($results) > 0) {
    echo "<h1><b>Is the the book you want to delete? </b></h1>";
    foreach ($results as $row) {
        ?>

          <h3>Title: <?= $row['title'] ?></h3><br>
           <h3>  Author: <?= $row['name'] ?> </h3><br>
           <h3>  Genre: <?= $row['genre'] ?> </h3><br>

        <form method="POST" action="tempDelete.php">
            <input type="hidden" name="delete-book" value="<?= $row['id'] ?>">
            <input type="submit" class="sub btncenter" value="Yes, delete this book">
        </form>
<?php
    }
    unset($_POST["delete-title"]);
} else if (count($results) < 1 && isset($_POST["delete-title"])) {
    echo "I am sorry, there is no book with that title in this library";
}

?>
</body>
</html>


