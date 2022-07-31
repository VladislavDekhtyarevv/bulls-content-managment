<?php

namespace App\Repositories;

use App\Models\Page;

class PageRepository extends Repository
{
    protected $model;

    public function __construct(Page $model)
    {
        parent::__construct($model);
    }
}
