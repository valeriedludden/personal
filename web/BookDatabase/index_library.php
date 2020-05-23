<?php
include "header.php";
try
{
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
    echo 'Error!: ' . $ex->getMessage();
    die();
}
# You SHOULD do this:
$dbUrl = getenv('DATABASE_URL');
# You SHOULD do this:
$dbUser = $dbOpts["user"];
foreach ($db->query('SELECT title, location, author FROM book') as $row)
{
    echo 'book' . $row['book'] . ' ';
    echo 'author' . $row['author'] . ' ';
    echo 'location' . $row['location'] . '';
    echo '<br/>';
}
?>
<body>

<div class="container">
    <form method="POST">
        <label for="book">Book:</label>
        <input type="text" id="book" name="book"><br />
        <input type="submit" value="Submit"> <br />
    </form>
    </form>

</div>
