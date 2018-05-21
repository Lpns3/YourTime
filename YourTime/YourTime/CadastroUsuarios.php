<?php
/*spl_autoload_register(function ($nomeClasse){
    if(file_exists("class" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
        require_once ("class" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }});
*/

require_once 'Usuarios.php';

$usuario = new Usuarios();

echo $usuario->InsereUsuario("Teste", "12345", "Testando", "teste@teste.com", 0);
echo "<br>";
//echo $usuario->SelecionaPessoa(23);
echo "<br>";
//echo $usuario->AtualizaPessoa("teste",23);
echo "<br>";
//echo $usuario->ExcluiPessoa(24);
echo "<br>";


?>