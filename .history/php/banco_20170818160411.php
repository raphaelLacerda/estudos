<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    Quantidade de funcionários


    <?php
//Mysqli --> improved
//PDO --> PHP Data Objects
//PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.
$servername = "localhost:3306";
$username = "root";
$password = "root";
/*
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/
try {
    $conn = new \PDO("mysql:host={$servername};dbname=arh", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (\PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
</body>
</html>