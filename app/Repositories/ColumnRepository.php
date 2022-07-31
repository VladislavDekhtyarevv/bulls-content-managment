<?php

namespace App\Repositories;

use App\Models\Column;
use App\Models\Page;

class ColumnRepository extends Repository
{
    protected $model;

    public function __construct(Column $model)
    {
        parent::__construct($model);
    }
}
