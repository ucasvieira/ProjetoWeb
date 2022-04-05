<?php

require_once("pessoa.class.php");
require_once("empresa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Lucas Vieira de Souza");
$pessoa->setEndereco("\nRua Manuel Vila D'alba");
echo $pessoa->getNome();

$empresa = new Empresa();
$empresa->setRazaoSocial("Escola XPTO LTDA");
echo $empresa->getRazaoSocial();


?>