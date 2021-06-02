<?php

namespace Neputer\Services;

use Neputer\Entities\Blog;

/**
 * Class BlogService
 * @package Neputer\Services
 */
class BlogService extends BaseService
{

    /**
     * The Blog instance
     *
     * @var $model
     */
    protected $model;

    /**
     * BlogService constructor.
     * @param Blog $Blog
     */
    public function __construct(Blog $Blog)
    {
        $this->model = $Blog;
    }

}
