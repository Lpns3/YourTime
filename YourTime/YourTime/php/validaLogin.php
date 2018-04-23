<?php
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];
    session_start();
    if($login == 'Hercules'){
        $_SESSION['usuario'] = $login;
        header('Location: IndexMenu.html');
    }else{
        echo "Login inválido!";
    }
?>