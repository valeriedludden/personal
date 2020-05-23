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
foreach ($db->query('SELECT *') as $row)
{
    echo $row;
    echo '<br/>';
}
?>
<body>

<div class="container">
    <form method="POST" action="books_page.php"> <label for="book">Book:</label>
        <input type="text" id="book" name="book"><br />
        <input type="submit" value="Submit"> <br />
    </form>'t type="submit" value="Search for Book " name="bookSearch">
    </form>

</div>
