<?php

namespace App\Repositories\Contracts;

interface UserInterface
{
    public function currentUser();

    public function updatePassword(int $userId, string $password);
}
