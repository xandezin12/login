<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>


    <STYLE>
body{
    BACKGROUND-COLOR: #008080;
}

.blococadastro{
width:300px;
height: 200px;
margin-left: 38%;
margin-top: 5%;
}


.botao:hover{

background-color: pink;
cursor: pointer;

}

input{

width:100;

padding: 10px;
margin-top: 10px;
font-size:20px;
border-radius: 4px;

}
p{
font-size: 30px;
color: white;
}

</style>

</head>
<body>

<?php

include ('conexao.php');

If($_SERVER['REQUEST_METHOD']=='POST'){

    $usuario=htmlspecialchars($_POST['usuario']);
    $rg=htmlspecialchars($_POST['rg']);
    $data_nascimento=htmlspecialchars($_POST['data_nascimento']);
    $data_nasc_sql=date('y-m-d',strtotime($data_nascimento));
    $senha=htmlspecialchars($_POST['senha']);
    $conf_senha=htmlspecialchars($_POST['conf_senha']);
    
    If($senha===$conf_senha){

        $sql = "SELECT * FROM usuario WHERE usuario = '$usuario'";
        $retorno = $con->query ($sql);
        $registro = $retorno-> num_rows;

        If($registro){

echo "<h4 style='color:white; text-align: center;
font-size: 25px'> ESSE USUARIO JA EXISTE!</h4>";


        }else{

$hashsenha= password_hash($senha, PASSWORD_DEFAULT);
$sql= "INSERT INTO usuario(usuario,rg,data_nascimento,senha)values('$usuario','$rg','$data_nasc_sql','$hashsenha' )";
$retorno=$con->query($sql);



if($retorno==true){
    echo "<h5 style='color:white; text-align: center;
    font-size: 25px'> CADASTRO REALIADO COM SUCESSO</h5>";
    
        }else{
            echo "<h4 style='color:white; text-align: center;
            font-size: 25px'> usuario não cadastrado!</h4>";


        }
    
    }

            

        }else{

            echo "<h4 style='color:white; text-align: center;
            font-size: 25px'> AS SENHAS NÃO CONFEREN!</h4>";

        }
        }


    
?>


  <marquee>  <p> Cadastro de Usuario</p></marquee>

    <center><h5><a href=" Tela_inicial_login.php"> Fazer Login</a></h5></center>

    <hr>
    <div class= "blococadastro">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

<INPUT TYPE= "TEXT" NAME= "usuario" placeholder="USUARIO:"required><br>
<INPUT TYPE= "TEXT" NAME= "rg" placeholder="RG:"required><br>
<INPUT TYPE= "date" NAME= "data_nascimento" placeholder="Data de Nascimento:"required><br>
<INPUT TYPE= "password" NAME= "senha" placeholder="Senha:"required><br>
<INPUT TYPE= "password" NAME= "conf_senha" placeholder="Confirma sua Senha:"required><br>

<INPUT class= "botao" type="submit" value="Cadastrar">
<INPUT class= "botao" type="reset" value="Limpar">


</form>
</div>

    
</body>
</html>