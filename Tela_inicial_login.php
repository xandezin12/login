<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <STYLE>
body{
    BACKGROUND-COLOR: #451531;
}

.login{
width:300px;
height: 200px;
margin-left: 38%;
margin-top: 5%;
}

input{

    width:100;

    padding: 10px;
    margin-top: 10px;
    font-size:20px;
}

h3{

    margin-left: 35%;
    color: white;
    font-size: 20PX;
}

a{

font-size: 20px;


}


a:hover{
color: white;

}


.erro{
color: white;
width: 100%;
height:30px;
background-color:red;


}

h5{

margin-left: 35%;
color: white;
font-size: 50PX;
}


h3{

    margin-left: 35%;
    color: white;
    font-size: 20PX;
}


.botao:hover{

background-color: pink;
cursor: pointer;

}



</STYLE>

</HEAD>

<BODY>
    <h5>LOGIN</h5>

    <HR>

<div class="erro">
<h3>Erro: Usuario ou senha invalidos.</h3>


</div>


        <DIV CLASS ="login">
            <form action="login.php" method="post">
            <input type="text"name ="usuario" placeholder="USUARIO:">
            <input type="password"name ="senha" placeholder="SENHA:">

            <input class="botao" type="submit" value="ENTRAR"><BR> <BR>

<a href="cad_usuario.php">Cadastra-se</a><br><br>

<a href="senha_esquecida/trocar_senha.php">esqueceu a senha</a><hr>





            </FORM>
        </DIV>

        

</body>
</html>