<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$a1 = new Aluno(); //intstanciando
$a1->nome='Alessandro';
$a1->cpf='123.456.789-00';

$aluno1=[
    'nome'=>'Alessandro',
    'cpf'=>'123.123.123-12',
];

$aluno2=[
    'Nome'=>'bruno',
    'cpf'=>'111.123.123-12',
];
$aluno3=[
    'NOME'=>'Rachel',
    'CPF'=>'345.123.123-12',
];

$cursoPHP= new Curso();
$cursoPHP->nome='Introdução ao PHP';
$cursoPHP->cargaHoraria=88;
$cursoPHP->descricao='aprender o básico de PHP';

echo "<h1>Aluno: {$a1->nome}</h1>";
