<?php

namespace App\Repositories;


use App\Models\Content;

class ContentRepository extends Repository
{
    protected $model;

    public function __construct(Content $model)
    {
        parent::__construct($model);
    }
}
