<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function paginate() {
        $user= User::paginate(15);
        return $user;
    }

}