<?php

namespace Neputer\Services;

use App\Models\User;


/**
 * Class PopulationService
 * @package Neputer\Services
 */
class PopulationService
{

    /**
     * The Population instance
     *
     * @var $model
     */
    protected $model;

    /**
     * PopulationService constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

}
