<?php

if(isset($_POST['submit'])){
   
     
     include_once('conexao.php');

     $container = $_POST['container'];
     $nome = $_POST['estabelecimento'];
     $cnpj = $_POST['cnpj'];
     $endereco = $_POST['endereco'];
     $responsavel = $_POST['responsavel'];
     $telefone = $_POST['telefone'];
     $data_cad = $_POST['datadistr'];
     $coleta = $_POST['coleta'];
    
 
    
     $result = mysqli_query($con, "INSERT INTO distr (container,estabelecimento, cnpj, endereco, responsavel, telefone, datadistr, coleta)
     VALUES ('$container','$nome', '$cnpj', '$endereco', '$responsavel', '$telefone', '$data_cad', '$coleta')");

     
if($result){
    echo "Container cadastrado!";
} else {
    echo "Erro ao cadastrar container: " . mysqli_error($con);
}
}




?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Containers distribuidos</title>
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
            margin-left: 20px;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 10px;
           
        }

        #submit:hover{

            background-image: linear-gradient(to right,rgb(221, 93, 7), rgb(241, 241, 7));/*muda a cor do botão enviar*/
            

        }

        button{

            background-image: linear-gradient(to right, #ebc80b, #216c37);/*cor do botão enviar*/
            width: 20%;
            margin-left: 20px;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 10px;
            
            

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
<span class="txt-link">Devolução e Exclusão</span>
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

        <form action="cdistr.php" method="POST">

    <fieldset>

       <!-- <legend><b>Cadastro de estabelecimento</b></legend>
        <br>-->
    

    <!--
        <p>Tipo de estabelecimento:</p>
        
        <input type="radio" id="cond" name="Tipo" value="condominio" required>
        <label for="cond">Condominio</label>
        
        <br>
       
        <input type="radio" id="com" name="Tipo" value="comercio" required>
        <label for="com">Comercio</label>
        
        <br>
        
        <input type="radio" id="res" name="Tipo" value="residencia" required>
        <label for="res">Residencia</label>
        <br>
        <br>

        <div class="inputBox">

</div> -->

<legend><b>Recebedor</b></legend>

<br>
<br>
<br>


    <div class="inputBox">

    <label for="container" class="labelinput">Modelo:</label>   
    <input type="text" name="container" id="container" class="inputUser" required>

    </div>

    <br>

    <br>
        

    <div class="inputBox">

    

        <label for="estabelecimento" class="labelinput">Estabelecimento:</label>      
        <input type="text" name="estabelecimento" id="estabelecimento" class="inputUser" required>
        </div> 

        <br>
        <br>

        <div class="inputBox">

    

        <label for="endereco" class="labelinput">Endereço completo:</label>      
        <input type="text" name="endereco" id="endereco" class="inputUser" required>
        </div> 

        <br>
        <br>



        
        <div class="inputBox">

    

        <label for="telefone" class="labelinput">Telefone:</label>      
        <input type="text" name="telefone" id="telefone" class="inputUser" required>
        </div> 

       <br>
       <br>


       <div class="inputBox">

    

<label for="responsavel" class="labelinput">Responsavel:</label>      
<input type="text" name="responsavel" id="responsavel" class="inputUser" required>
</div> 

       <br>
       <br>


    <div class="inputBox">

    

<label for="cnpj" class="labelinput">CNPJ:</label>      
<input type="text" name="cnpj" id="cnpj" class="inputUser" required>
</div> 

        <br>
        <br>
      
    
    <div class="inputBox">

    <label for="coleta" class="labelinput">Ponto de coleta: </label>   
    <input type="text" name="coleta" id="coleta" class="inputUser" required>  
    </div>
    
    <br>
    <br>

                    
    <div class="inputBox">

    <label for="datadistr">Data de distribuição:</label>
    <input type="date" name="datadistr" id="datadistr" required>   
   
    </div> 
    
    <br>
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
margin-top: 480px;
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
</body>
</html>


