<?php

ini_set('display_erros',1);

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$br = new ValidarBR();
$br->validarDocumento('12345678');

//$us = new ValidarUS();
//$us->validarDocumento('12345678');