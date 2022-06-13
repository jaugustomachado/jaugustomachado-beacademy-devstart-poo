<?php

ini_set('display_errors',1);

include 'vendor/autoload.php';

use Classes\Config\Usuario;
use Classes\Categoria;

$us2= new Usuario();
$c1=new Categoria();

var_dump($us2);

var_dump($c1);

// reference the Dompdf namespace
use Dompdf\Dompdf;

$html='';

for($n=0; $n<10;$n++){
    $html='oi <br>';
}

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1> hello world</h1>'.$html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();