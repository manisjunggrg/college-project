<?php

namespace Neputer\Services;

use Neputer\Entities\Hospital;

/**
 * Class HospitalService
 * @package Neputer\Services
 */
class HospitalService
{

    /**
     * The Hospital instance
     *
     * @var $model
     */
    protected $model;

    /**
     * HospitalService constructor.
     * @param Hospital $Hospital
     */
    public function __construct(Hospital $Hospital)
    {
        $this->model = $Hospital;
    }

}
