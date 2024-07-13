<?php

include("teladelogin.html");

    if (isset($_POST['usuario']) || isset ($_POST['senha'])){

if(strlen($_POST['usuario']) == 0) {

    echo "Insira seu usuário";

}

else if (strlen($_POST['senha']) == 0) 

{

    echo "Insira a senha"; }  
    
    
    else {

        $usuario = $con->real_escape_string($_POST['usuario']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $con->query($sql_code) or  die("Falha na execução do codigo SQL: " . $conexao->error);

        $quantidade = $sql_query->num_rows;


        if ($quantidade == 2){

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {

                session_start();

            }

            $_SESSION['usuario'] = $usuario['ricardo.souza'];
            $_SESSION['senha'] = $usuario['104070'];
            $_SESSION['usuario'] = $usuario['camila.santana'];
            $_SESSION['senha'] = $usuario['102030A'];

            header("Location: bemvindo.php");


        } else {

            echo "Usuario ou senha invalido!";


        }

       



    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Login</h1>

<form action="" method="POST">
    <p>
        <label>usuario</label>
        <input type="text" name="usuario">
     </p>

    <p>

        <label>senha</label>
        <input type="senha" name="senha">
</p>

<p>
    <button type="submit">Enviar </button>

</p>

</form>


    
</body>
</html>
