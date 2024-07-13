<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de coleta</title>

    <style>
        body{ 
            font-family:'Times New Roman', Times, serif; /* Troca de fonte*/
            padding: 1px; 
            background-image: url('91.jpg');; /*img fundo da pagina */
            background-size: 1920px;

        }

        div {

            background-color: #f0edd9; /*cor de fundo da tela de login */
            position: absolute; /* posição fixa */
            top: 40%; /*posicionamento da imagem */
            left: 20%; /*posicionamento da imagem */
            transform: translate(-50%, -50%); /* ajuste da tela de login */
            padding: 80px; /* distancia do texto e aborda */
            border-radius: 15px; /*deixa as margens arredondadas da tela login */
            color: #ebc80b; /* cor da palavra login*/

        }

        input {

            padding: 15px; /* distancia do texto e aborda*/
            border: none; /* retira a borda do campo usuario*/
            outline: none;/* retira a linha quando clica no campo usuario*/
            font-size: 15; /* tamanho da fonte da palavra usuario /senha*/
            

        }

        .InputSubmit {

            background-color: #216c37; /*cor do botão enviar*/
            border: none; /* retira a borda*/
            padding: 15px; /* distancia do texto e aborda*/
            width: 100%; /*largura do botão*/
            border-radius: 10px; /*arredonta as bordas do botão*/
            color: rgb(246, 246, 247);/*Cor da palavra enviar*/
            font-size: 15px; /*tamanho da fonte*/

        }

        .InputSubmit:hover {

            background-color: rgb(235, 184, 89); /*Quando passa o mouse muda a cor do botão*/
            cursor: pointer; /*muda o mouse quando passa em cima do botão*/


        }

    </style>
</head>
<body>

    
    <div>
        <h1>Conecte-se</h1> 

        <form action="testelogin.php" method="POST">

        <input type="email" name="email" placeholder="E-mail" required>
        
        <br>
        <br>

        <input type="password" name="senha" placeholder="Senha" required>

        <br>
        <br>
        
        <input class="InputSubmit" type="submit" name="submit" value="Login">

        <br>
        <br>
        

    </form>
    
    </div>
    
</body>
</html>