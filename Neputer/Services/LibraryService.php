<?php

namespace Neputer\Services;

use Neputer\Entities\Library;

/**
 * Class LibraryService
 * @package Neputer\Services
 */
class LibraryService
{

    /**
     * The Library instance
     *
     * @var $model
     */
    protected $model;

    /**
     * LibraryService constructor.
     * @param Library $Library
     */
    public function __construct(Library $Library)
    {
        $this->model = $Library;
    }

}
