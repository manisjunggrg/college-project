<?php

namespace Neputer\Services;

use Neputer\Entities\Category;

/**
 * Class CategoryService
 * @package Neputer\Services
 */
class CategoryService
{

    /**
     * The Category instance
     *
     * @var $model
     */
    protected $model;

    /**
     * CategoryService constructor.
     * @param Category $Category
     */
    public function __construct(Category $Category)
    {
        $this->model = $Category;
    }

}
