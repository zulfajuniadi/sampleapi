<?php

namespace App\Acls;

use App\User;

class UsersAcl extends BaseAcl
{

    protected function show()
    {
        $user = $this->route->parameter('users', new User);
        if ($this->user->id != $user->id) {
            return false;
        }
        return true;
    }

    protected function update()
    {
        $user = $this->route->parameter('users', new User);
        if ($this->user->id != $user->id) {
            return false;
        }
        return true;
    }

    protected function delete()
    {
        $user = $this->route->parameter('users', new User);
        if ($this->user->id != $user->id) {
            return false;
        }
        return true;
    }
}
