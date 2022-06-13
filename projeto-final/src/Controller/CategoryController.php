<?php

declare(strict_types=1);

namespace App\Controller;

class CategoryController extends AbstractController{
    public function listAction():void
    {
        parent::render("categoria/list");
    }
    public function addAction():void
    {
        parent::render("categoria/add");
    }
    public function editAction():void
    {
        parent::render("categoria/edit");
    }
}