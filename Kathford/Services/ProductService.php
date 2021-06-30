<?php

namespace Kathford\Services;

use Kathford\Entities\Product;

/**
 * Class ProductService
 * @package Kathford\Services
 */
class ProductService
{

    /**
     * The Product instance
     *
     * @var $model
     */
    protected $model;

    /**
     * ProductService constructor.
     * @param Product $Product
     */
    public function __construct(Product $Product)
    {
        $this->model = $Product;
    }

}
