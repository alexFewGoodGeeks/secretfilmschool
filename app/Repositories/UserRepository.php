<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserInterface;

class UserRepository extends MasterRepository implements UserInterface
{
    protected $model = User::class;

    public function currentUser()
    {
        return \Auth::user();
    }
}
