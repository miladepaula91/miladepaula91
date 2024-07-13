<?php

if(isset($_POST['submit'])){
   

     //   print_r('Tipo de estabelecimento: ' .$_POST['Tipo']);
     //   print_r('<br>');
     //   print_r('Nome: ' .$_POST['Nome']);
    //    print_r('<br>');
     //   print_r('CNPJ: ' .$_POST['cnpj']);
     //   print_r('<br>');
      //print_r('Email:' .$_POST['email']);
     //   print_r('<br>');
    //    print_r('Telefone: ' .$_POST['telefone']);
    //    print_r('<br>');
    //    print_r('Data de cadastro: ' .$_POST['data_cadastro']);
    //    print_r('<br>');
    //    print_r('Endereço: ' .$_POST['end']);
    //    print_r('<br>');
    //    print_r('Cidade: ' .$_POST['cid']);
    //    print_r('<br>');
    //    print_r('Responsavel: ' .$_POST['resp']);
    //    print_r('<br>');
    //    print_r('Ponto de coleta: ' .$_POST['col']);
     //   print_r('<br>');


     
    include_once('conexao.php');

    $tipo = $_POST['Tipo'];
    $nome = $_POST['Nome'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_cad = $_POST['data_cadastro'];
    $endereco = $_POST['end'];
    $responsavel = $_POST['resp'];
    $coleta = $_POST['col'];
    

  

    $result = mysqli_query($con, "INSERT INTO residencia (tipo, nome, cnpj, email, Endereco, responsavel, telefone, data_cad, coletares)
    VALUES ('$tipo','$nome', '$cnpj', '$email', '$endereco', '$responsavel', '$telefone', '$data_cad', '$coleta')");


    }


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario</title>
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
            margin-left: 80px;
            border: none;
            padding: 14px;
            cursor: pointer;
            border-radius: 10px;
           
        }

        #submit:hover{

            background-image: linear-gradient(to right,rgb(221, 93, 7), rgb(241, 241, 7));/*muda a cor do botão enviar*/

        }

        button{

            background-image: linear-gradient(to right, #ebc80b, #216c37);/*cor do botão enviar*/
            width: 20%;
            margin-left: 200px;
            border: none;
            padding: 14px;
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
<a href="sistema.php">
<span class="icon"><i class="bi bi-house"></i></i></span>
<span class="txt-link">Home</span>
</a></li>

<li class="item-menu">
<a href="form.php">
<span class="icon"><i class="bi bi-person-lines-fill"></i></span>
<span class="txt-link">Cadastro de estabelecimento</span>
</a></li>


<li class="item-menu">
<a href="c.aloc.php">
<span class="icon"><i class="bi bi-basket3"></i></i></span>
<span class="txt-link">Containers</span>
</a></li>

<li class="item-menu">
<a href="financeiro.php">
<span class="icon"> <i class="bi bi-cash-coin"></i></span>
<span class="txt-link">Financeiro</span>
</a></li>

</ul>
</nav>

<div class="titulo">
    
     <img src="4.jpg" width="280" height="280">
  
</div>

<div class="informativo">
<img src="23.jpg" width="550" height="170">
</div>
       

    <div class="box">

        <form action="form.php" method="POST">

    <fieldset>

       <!-- <legend><b>Cadastro de estabelecimento</b></legend>
        <br>-->
    
        <div class="inputBox">
    
        <p>Containers</p>
        
        <input type="radio" id="aloc" name="tipo" value="alocados" required>
        <label for="aloc">Alocados</label>
        <br>
        <br>
       <div id=resultadoloc></div>
       <br>
       <br>
        <input type="radio" id="dist" name="tipo" value="distribuidos" required>
        <label for="dist">Distribuidos</label>
        
       <br>
        <br>
        <div id=resultadodist></div>

        <input type="radio" id="disp" name="tipo" value="disponiveis" required>
        <label for="disp">Disponiveis</label>
        <br>
        <br>
        <div id=resultadodisp></div>
    </div>


    <script>  
      
    document.getElementById('disp').addEventListener('click', function() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'fetchData(2).php', true);
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('resultadodisp').innerHTML = this.responseText;
        }
    };
    xhr.send();
});


</script>

</body>
</html>
    <!--
        <div class="inputBox">

</div> 
<br>

    <div class="inputBox">

    <label for="Nome" class="labelinput"> Nome:</label>   
    <input type="text" name="Nome" id="nome" class="inputUser" required>

    </div>

    <br>

    <br>
        

    <div class="inputBox">

    

        <label for="cnpj" class="labelinput">CNPJ/CPF</label>      
        <input type="text" name="cnpj" id="cnpj" class="inputUser" required>
        </div> 

        <br>
      
    
    <div class="inputBox">

    <label for="email" class="labelinput"> E-mail: </label>   
    <input type="text" name="email" id="email" class="inputUser" required>  
    </div>
    
    <br>
  
    <div class="inputBox">

    <label for="telefone" class="labelinput"> Telefone: </label>   
    <input type="telefone" name="telefone" id="telefone" class="inputUser" required>  
    </div>

    <br>
   
                    
    <div class="inputBox">

    <label for="data_cadastro">Data de cadastro:</label>
    <input type="date" name="data_cadastro" id="data_cadastro" required>   

    </div> 
    
    <br>

                   
    <div class="inputBox">

        <label for="end" class="labelinput"> Endereço completo:</label>        
        <input type="text" name="end" id="end" class="inputUser" required>

        </div> 
        <br>
  
    <div class="inputBox">

    <label for="resp" class="labelinput">Responsavél:</label>        
    <input type="text" name="resp" id="resp" class="inputUser" required>
    </div> 
    <br>
   
    
    
    <div class="inputBox">

    <label for="col" class="labelinput">Ponto de coleta:</label>        
    <input type="text" name="col" id="col" class="inputUser" required>
    </div> 
    <br>
     
    <input type="submit" name="submit" id="submit" required>

    <button>
        
    <a href="sair.php" class="btn btn-danger">Sair</a>
  
    
    </button>

    <div class="tchau">


       
       </div>


    </fieldset>    

        </form>
    </div> -->
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
margin-top: 430px;
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


