<?php

$dbHost = '127.0.0.1'; /*variavel, host banco de dados*/ 
$dbUsername = 'root'; /*por padrão é esse mesmo*/ 
$dbPassaword = ''; /*meu bd não tem senha*/ 
$dbName = 'sistemadecoleta'; /*tela de login*/ 

$conexao = new mysqli ($dbHost, $dbUsername,$dbPassaword,$dbName); /*variavel para conectar banco de dados*/ 

if ($conexao->connect_errno){

echo "Erro"; 

}
 else{  

    echo "Conexão efetuada com sucesso"; 
 } 

?>  