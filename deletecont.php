<?php

if (isset($_POST['submit'])) {
    include_once('conexao.php');

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];

        // Proteção contra SQL Injection
        $nome = mysqli_real_escape_string($con, $nome);

        // Verificar se o registro existe
        $checkResult = mysqli_query($con, "SELECT * FROM disp WHERE nome='$nome'");
        
        // Se não existir registro com o nome fornecido
        if (mysqli_num_rows($checkResult) == 0) {
            // Este é o novo código:
            echo "<script>
                    alert('Registro não encontrado!');
                    window.location.href = 'deletecont.php';
                  </script>";
            exit;  // Encerra a execução do script
        }

        $result = mysqli_query($con, "DELETE FROM disp WHERE nome='$nome'");

        if ($result) {
            echo "Container excluido!";
        } else {
            echo "Erro ao deletar container: " . mysqli_error($con);
        }
    }
}

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exclusão de Container</title>
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<style>


    body{

        font-family: 'Times New Roman', Times, serif;
        background-image: url('91.jpg');
    }

    .box{

        color: black;/*cor da letra*/
        position:absolute; /*tamanho da tela cadastro*/
        top: 430px;;
        left: 37%;
        transform: translate(-50%, -50%);
        background-color: white; /*cor da tela cadastro*/
        padding: 1px; /* tamanho da tela de fundo*/
        border-radius: 5px;/*tamanho da linha da borda*/
        width: 30%; /*tamanha da tela*/

    }

    fieldset{

        border: 0px solid #f0edd9;/*cor da borda*/

    }

    legend{

        border: 1px solid #f0edd9;/*tamanho da borda*/
        padding: 10px;/*espaço do txt da borda*/
        text-align:center;/*centralizar txt da borda*/
        background-color: #f0edd9;/*cor de fundo da borda*/
        border-radius: 5px;/*arredondar a borda*/
    }

        .inputbox{

            position: relative;
        
        }

        .inputUser{

            background: none;/* cor de fundo da caixa de texto*/
            border: none; /*tira a borda*/
            border-bottom: 1px solid rgb(235, 221, 221);/*deixa somente uma linha branca*/
            outline: none;/*tira o quadrado quando clica com o mouse*/
            color: rgb(13, 13, 14); font-size: 15px; /*cor e tamanho do txto que usuario digita*/
            width: 100%;/*tamanho das linhas*/
            letter-spacing: 2px;/*espaço entre as letras digitadas*/
        }

        
        #data_cadastro{

            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit{

          
            background-image: linear-gradient(to right, #ebc80b, #216c37);/*cor do botão enviar*/
            width: 20%;
            margin-left: 10px;
            border: none;
            padding: 14px;
            cursor: pointer;
            border-radius: 10px;
            margin-top:50px;
           
        }

        #submit:hover{

            background-image: linear-gradient(to right,rgb(221, 93, 7), rgb(241, 241, 7));/*muda a cor do botão enviar*/

        }

        button{

            background-image: linear-gradient(to right, #ebc80b, #216c37);/*cor do botão enviar*/
            width: 20%;
            margin-left: 230px;
            border: none;
            padding: 14px;
            cursor: pointer;
            border-radius: 10px;
            margin-top: 20px;
            
            

        }


       button:hover{

        background-image: linear-gradient(to right, rgb(221, 93, 7), rgb(241, 241, 7));/*muda a cor do botão enviar*/
        width: 20%;
        border: none;
        padding: 15;
        cursor: pointer;
        border-radius: 10px;
       


       } 
</style>

</head>

<body>

<nav class="menu">

<div class="expandir"> 

<br>
<i class="bi bi-list"></i></br>

</div>

<ul>

<li class="item-menu">
<a href="opcad.php">
<span class="icon"><i class="bi bi-person-lines-fill"></i></span>
<span class="txt-link">Cadastros</span>
</a></li>

<li class="item-menu">
<a href="cdistr.php">
<span class="icon"><i class="bi bi-basket3"></i></i></span>
<span class="txt-link">Locação de container</span>
</a></li>

<li class="item-menu">
<a href="caloc.php">
<span class="icon"><i class="bi bi-basket3"></i></i></span>
<span class="txt-link">Containers</span>
</a></li>

<li class="item-menu">
<a href="exclusao.php">
<span class="icon"> <i class="bi bi-cash-coin"></i></span>
<span class="txt-link">Devolução e exclusão</span>
</a></li>

</ul>
</nav>

<div class="titulo">
    
<img src="oi.jpg" width="400" height="300">
  
</div>

<div class="informativo">
<img src="23.jpg" width="550" height="170">
</div>
       

    <div class="box">

        <form action="deletecont.php" method="POST">

    <fieldset>

       <!-- <legend><b>Cadastro de estabelecimento</b></legend>
        <br>-->
    

    
        <legend><b>Exclusão de container</b></legend>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    <div class="inputBox">


        <label for="nome" class="labelinput">MODELO:</label>      
        <input type="text" name="nome" id="nome" class="inputUser" required>
        </div> 

        <br>

    
    
     
    <input type="submit" name="submit" id="submit" required>

    <button>
        
    <a href="login.php" class="btn btn-danger">Sair</a>
  
    
    </button>

 


    </fieldset>    

        </form>
    </div>
<style>

    body{

font-family: 'Times New Roman', Times, serif;

background-image: url('91.jpg');
background-size: 1920px;
}

.informativo{

    
    margin-left: 1240px;
    margin-top: 280px;
   
}

.titulo{
    
padding: 40px;
margin-left: -40px;
margin-top: -10px;

}
nav.menu{

width: 50px;
background-color: #ebc80b;
padding: 20px 5 20px 1%;
box-shadow: 3px 0 0 #216c37;
position: fixed;
margin-top: 460px;
left: 0;
overflow: hidden;
transition: 2s;

}

nav.menu:hover{

    width: 300px; /*largura da abertura*/

}


.expandir i{

width: 80%;
padding-left: 10px;

}


.expandir i{

color: blue;
font-size: 24px;
cursor: pointer;

}

ul{

height: 100%;
list-style-type: none;

}
ul li.item-menu{

transition: .2s;

}

ul li.item-menu:hover{

    background-color: green;

}

ul li.item-menu a{

color: aliceblue;
text-decoration:none;
font-size: 20px;
padding: 20px 4%;
display: flex;
margin-bottom: 20px;
line-height: 30px; /* alinhamento de linha*/


}

ul li.item-menu a .txt-link{

    margin-left: 20px;

}

ul li.item-menu a .icon > i{

    font-size:20px;
    margin-left: -30px;


}

</style>



<script>

function loadPage() {
    if(document.getElementById('dev').checked) {
        window.location.href = "devolucao.php";
    } else if(document.getElementById('exc').checked) {
        window.location.href = "deletetipo.php";
    } else if(document.getElementById('del').checked) {
        window.location.href = "deletecont.php";
    }else if(document.getElementById('cad').checked) {
        window.location.href = "cadcont.php";
}
}

</script>
</body>
</html>


