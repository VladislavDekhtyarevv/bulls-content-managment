<?php

namespace App\Repositories;

use App\Models\Block;

class BlockRepository extends Repository
{
    protected $model;

    public function __construct(Block $model)
    {
        parent::__construct($model);
    }
}
