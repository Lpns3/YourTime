<?php

// include
require "library/Rain/autoload.php";

// namespace
use Rain\Tpl;


// configure
// template é a pasta onde fica o html
// cache é a pasta usada para deixar o html mais rápido
$config = array(
    "tpl_dir"       => "template/",
    "cache_dir"     => "cache/"
);

// draw
$tpl = new Tpl;
$tpl->assign( $var );
// Nome da variável, valor da variável
$tpl->assign( "mensagem", "Teste Rain TPL" );
$tpl->assign( "data", "24/05/18" );
// draw é o comando que renderiza a página html com as variáveis php
echo $tpl->draw( "index" );


// end