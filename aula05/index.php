<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

include 'Validar.php';

$c1 = new Cliente('chiquim@hotmail.com','123456');
$c1->setNome('Chiquim');
$c1->setDataCadastro('01/01/2019');

$cpf = '12345678911';

Validar::validarCpf($cpf);

$c1->setCpf($cpf);


$g1 = new Gestor('zezim@hotmail.com','123456',6000);
$g1->setNome('zezim');
//$g1->setSalario(6000);

$gg1=new GestorGeral('maria@email.com', '123',3444);
//$us=new Usuario('hacker@email.com','1234');
var_dump($c1);
var_dump($g1);
var_dump($gg1);
//var_dump($us);
