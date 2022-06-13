<?php

ini_set('display_erros',1);

include 'vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;

$url=explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName,string $methodName){
    return[
        'controller'=>$controllerName,
        'method'=>$methodName,
    ];
}
$routes=[
    '/' => createRoute(IndexController::class,'indexAction'),
    '/produtos'=>createRoute(ProductController::class,'listAction'),
    '/produtos/novo'=>createRoute(ProductController::class,'addAction'),
    
];


if(false ===isset($routes[$url])){
    (new ErrorController())->notFoundAction();
    exit;
}

$controllerName=$routes[$url]['controller'];
$methodName=$routes[$url]['method'];

(new $controllerName())->$methodName();

var_dump($routes[$url]);

$c = new IndexController();
//$c->indexAction();

$c->loginAction();

$p = new ProductController();
$p->listAction();
$p->addAction();
$p->editAction();

$cat = new CategoryController();
$cat->listAction();
$cat->addAction();
$cat->editAction();