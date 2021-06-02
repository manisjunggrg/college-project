<?php

namespace Neputer\Services;

use Neputer\Entities\Account;

/**
 * Class AccountService
 * @package Neputer\Services
 */

class AccountService
{
    /**
     * The Account instance
     *
     * @var $model
     */
    protected $model;

    /**
     * AccountService constructor.
     * @param Account $Account
     */
    public function __construct(Account $Account)
    {
        $this->model = $Account;
    }

}
