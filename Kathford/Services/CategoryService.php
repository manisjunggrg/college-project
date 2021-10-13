<?php

namespace Kathford\Services;

use Kathford\Entities\Category;

/**
 * Class CategoryService
 * @package Kathford\Services
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
