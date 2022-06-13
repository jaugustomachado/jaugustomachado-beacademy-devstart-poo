<?php

ini_set('display_errors', 1);


include 'Produto.php';
//echo $p2 -> teste();

$p1 = new Produto();
$p1->setNome('tenis de corrida');
$p1->setValor(299.0);

$p2 = new Produto();
$p2->setNome('calça jeans');
$p2->setValor(100);

var_dump($p1);
var_dump($p2);