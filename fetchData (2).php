
<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';  // senha, se houver
$dbName = 'sistemadecoleta';

$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($con->connect_error) {
    die("Erro na conexão: " . $con->connect_error);
}

$sql = "SELECT * FROM disp";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>nome</th>
            <th>peso</th>
         
          </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['peso'] . "</td>";
        
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Sem resultados.";
}

$con->close();

?>

