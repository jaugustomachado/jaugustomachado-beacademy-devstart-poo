<?php

ini_set('display_errors', 1);


include 'Produto.php';
include 'Categoria.php';
//echo $p2 -> teste();


$c1 = new Categoria('roupas', 'unissex');
$c2 = new Categoria('banho', 'toalha');
$c3 = new Categoria('calçados', 'sapato');


$p1 = new Produto('tenis corrida', 299, $c3);
//$p1->setNome('tenis de corrida');
//$p1->setValor(299.0);

$p2 = new Produto('calçajeans',100, $c1);
//$p2 -> setCat($c2); não vai funcionar
//$p2->setNome('calça jeans');
//$p2->setValor(100);

$p3 = new Produto('calça branca', 100, $c1);
//$p3->setNome('calça branca');
//$p3->setValor(100);

var_dump($p1);
var_dump($p2);
var_dump($p3);