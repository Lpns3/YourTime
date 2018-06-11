<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "YourTimeDB";
$conexao = mysqli_connect($host, $user, $pass);
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <script type="text/javascript">
    function loginsuccessfully(){
        setTimeout("window.location='../../Html/IndexMenu.html'", 5000);
    }
    function loginfailed(){
        setTimeout("window.location='../../Html/Login/Login.html'", 5000);
    }
    </script>
</head>
<body>
    
</body>
</html>

<?php
   $login = $_POST['usuario'];
   $senha = $_POST['senha'];
   $sql = mysqli_query($conexao,"SELECT * FROM USUARIOS WHERE USUARIO = '$login' AND SENHA = '$senha'") or die(mysqli_error());
   $row = mysqli_num_rows($sql);

    echo $row;

   if($row > 0)
   {
       session_start();
       $_SESSION['usuario'] = $_POST['usuario'];
       $_SESSION['senha'] = $_POST['senha'];
       echo "<center>Você foi autenticado com sucesso! Aguarde um instante.</center>";
       echo "<script>loginsuccessfully()</script>";
   }
   else
   {
        echo "<center>Nome de usuário ou senha inválidos! Aguarde um instante para tentar novamente.</center>";
        echo "<script>loginfailed()</script>";
   }
?>