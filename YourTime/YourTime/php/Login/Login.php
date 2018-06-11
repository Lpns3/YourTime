<?php

class Login
{    
    public function VerificaDados($usuario, $senha){
        try{

            $conn = new mysqli("localhost", "root", "", "yourtimedb");
            
            $result = $conn->query("SELECT * FROM Usuarios WHERE Usuario = $usuario");

            while($row = $result -> fetch_array()){
                $nome = $row["nome_pessoa"];
                echo $nome . "<br>";
            }
            $conn->close();
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }
}

?>