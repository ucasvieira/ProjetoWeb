<?php

require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Lucas Vieira de Souza");
$pessoa->setEndereco("\nRua Manuel Vila D'alba");
echo $pessoa->getNome();

?>