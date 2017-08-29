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
// Create connection
$connection = new \mysqli($servername, $username, $password);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";
// $connection->close();
// mysqli_close($connection);



//phpinfo();
$conn;
try {
    $conn = new \PDO("mysql:host={$servername};dbname=arh", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    echo "PDO ---> Connected successfully";
} catch (\PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
} finally {
    echo "finalizando a conexao";
}
/*
    Example (MySQLi Object-Oriented)
$conn->close();

Example (MySQLi Procedural)
mysqli_close($conn);

Example (PDO)
$conn = null;
}
*/
//executar insert ==> $conn->query($sql) (mysqli) || $conn->exec($sql)
//select
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$resultado = $conn->query($sql); // mysqlLi


$stmt = $conn->prepare("select * from FUNCIONARIO");
$stmt->execute();
$result = $stmt->setFetchMode(\PDO::FETCH_ASSOC);
echo $result;

echo $resultado;
?>
</body>
</html>