<?php
try
{
    $user = 'Group03';
    $password = 'letmein';
    $db = new PDO('pgsql:host=localhost;dbname=ConferenceNotes', $user, $password);
// this line makes PDO give us an exception when there are problems,
// and can be very helpful in debugging! (But you would likely want
// to disable it for production environments.)
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
    echo 'Error!: ' . $ex->getMessage();
    die();
}
echo '<p>Scripture Resources<p/>';
echo '<form method="POST"> <label for="book">Book:</label>
	  <input type="text" id="book" name="book"><br />
	  <input type="submit" value="Submit"> <br />
	  </form>';
$book = $_POST["book"];
foreach ($db->query('SELECT "idScript", book, chapter, verse, content FROM public."Scriptures" WHERE book = "' . $book . '"') as $row)
{
    echo '<p>';
    echo '<b>';
    echo $row['book'];
    echo ' ';
    echo $row['chapter'];
    echo ':';
    echo $row['verse'];
    echo '</b>';
    echo ' Contains: ';
    echo $row['content'];
    echo '<p/>';
}
?>
