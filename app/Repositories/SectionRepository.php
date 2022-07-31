<?php

namespace App\Repositories;

use App\Models\Page;
use App\Models\Section;

class SectionRepository extends Repository
{
    protected $model;

    public function __construct(Section $model)
    {
        parent::__construct($model);
    }
}
