<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';  // senha, se houver
$dbName = 'sistemadecoleta';

$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($con->connect_error) {
    die("Erro na conexão: " . $con->connect_error);
}

function exibeTabelaCaloc($con) {
    $sql = "SELECT * FROM caloc";
    $result = $con->query($sql);


    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Estabelecimento</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>Responsável</th>
                <th>Data de Locação</th>
                <th>Coleta</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {

            echo "<tr>";
            echo "<td>" . $row['idaloc'] . "</td>";
            echo "<td>" . $row['estabelecimento'] . "</td>";
            echo "<td>" . $row['nomecond'] . "</td>";
            echo "<td>" . $row['cnpj'] . "</td>";
            echo "<td>" . $row['e-mail'] . "</td>";
            echo "<td>" . $row['endereco'] . "</td>";
            echo "<td>" . $row['responsavel'] . "</td>";
            echo "<td>" . $row['data_locacao'] . "</td>";
            echo "<td>" . $row['coleta'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Sem resultados.";
    }
    
}

function exibeTabelaDistr($con) {
    $sql = "SELECT * FROM distr";
    $result = $con->query($sql);
    $sql = "SELECT * FROM distr";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>id</th>
            <th>estabelecimento</th>
            <th>coleta</th>
            
          </tr>";

        while ($row = $result->fetch_assoc()) {

            echo "<tr>";
            echo "<td>" . $row['Id'] . "</td>";
            echo "<td>" . $row['estabelecimento'] . "</td>";
            echo "<td>" . $row['coleta'] . "</td>";
            
            echo "</tr>";
        }
        echo "</table>";
    }
}

function exibeTabelaDisp($con) {
    $sql = "SELECT * FROM disp";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>id</th>
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
}

if (isset($_GET['tabela'])) {
    switch ($_GET['tabela']) {

        case 'caloc':
            exibeTabelaCaloc($con);
            break; 

        case 'distr':
            exibeTabelaDistr($con);
            break;
      
        case 'disp':
            exibeTabelaDisp($con);
            break;

        default:
            echo "Tabela não reconhecida.";
            break;
    }
} 
?>