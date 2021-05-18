<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserInterface;
use Illuminate\Support\Facades\Hash;

class UserRepository extends MasterRepository implements UserInterface
{
    protected $model = User::class;

    public function currentUser()
    {
        return \Auth::user();
    }

    public function updatePassword(int $userId, string $password)
    {
        $user = User::findOrfail($userId);

        $user->password = Hash::make($password);

        return $user->save();
    }
}
