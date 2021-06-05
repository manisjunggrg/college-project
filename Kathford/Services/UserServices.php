<?php

namespace Kathford\Services;


use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserService
 * @package Kathford\Services
 */
class UserServices
{

    /**
     * The User instance
     *
     * @var $model
     */
    protected $model;

    /**
     * UserService constructor.
     * @param User $User
     */
    public function __construct(User $User)
    {
        $this->model = $User;
    }

    /**
     * @return Authenticatable|null
     */
    public function getActiveUser(): ?Authenticatable
    {
      dd(Auth::id());
    }

}
