<?php
function listScriptures($db, $query)
{
    foreach ($db->query($query) as $row)
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
}
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
echo '<p><b>Resources:</b><p/>';
$query = 'SELECT "idScript", book, chapter, verse, content FROM public."Scriptures" ';
listScriptures($db, $query);
echo '<br /><br />';
echo '<form method="POST"> 
		  <label for="book">Book:</label>
		  <input type="text" id="book" name="book"><br /><br />
		  <input type="submit" value="List the Scriptures" name="lstScriptures">
	  </form>';
if(isset($_POST['lstScriptures']))
{
    $book = $_POST["book"];
    $query = 'SELECT book, chapter, verse, content FROM public."Scriptures" WHERE book = \'' . $book . '\'';
    listScriptures($db, $query);
}
