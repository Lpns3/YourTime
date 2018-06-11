<?php

class Usuarios
{
    public function InsereUsuario($usuarios, $senha, $nome, $email, $ativo){
        try{
            $conn = new mysqli("localhost", "root", "", "yourtimedb");
            $stmt = $conn->prepare("INSERT INTO usuarios (USUARIO, SENHA, NOME, EMAIL, ATIVO) VALUES (?,?,?,?,?)");
            $stmt->bind_param("ssssi", $usuarios, $senha, $nome, $email, $ativo);
            
            $stmt->execute();
            $conn->close();
            return "Registro inserido com sucesso";
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function SelecionaPessoa ($id){
        try{
            $conn = new mysqli("localhost", "root", "root", "bd_aula_ling");
            
            $result = $conn->query("SELECT * FROM usuarios WHERE id_pessoa = $id");
            
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
    
    public function AtualizaPessoa ($nome, $id){
        try{
            $conn = new mysqli("localhost", "root", "root", "bd_aula_ling");
            
            $stmt = $conn->prepare("UPDATE pessoa SET nome_pessoa = ? WHERE id_pessoa = ?");
            $stmt->bind_param("si", $nome, $id);
            
            $stmt->execute();
            $conn->close();
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function ExcluiPessoa ($id){
        try{
            $conn = new mysqli("localhost", "root", "root", "bd_aula_ling");
            
            $stmt = $conn->prepare("DELETE FROM pessoa WHERE id_pessoa = ?");
            $stmt->bind_param("i", $id);
            
            $stmt->execute();
            $conn->close();
            return "Registro excluido com sucesso";
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }
}

?>