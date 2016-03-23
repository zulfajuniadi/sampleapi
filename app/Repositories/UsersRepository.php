<?php

namespace App\Repositories;

use App\User;

class UsersRepository extends BaseRepository
{

    protected function extractData($extracted = [])
    {
        $extracted = [];
        if ($this->request->has('name')) {
            $extracted['name'] = $this->request->get('name');
        }

        if ($this->request->has('email')) {
            $extracted['email'] = $this->request->get('email');
        }

        if ($this->request->has('password')) {
            $extracted['password'] = app('hash')->make($this->request->get('password'));
        }

        return $extracted;
    }

    public function lists()
    {
        $user = app(User::class);

        if ($name = $this->request->get('name')) {
            $user->where('name', 'like', "%{$name}%");
        }

        if ($email = $this->request->get('email')) {
            $user->where('email', 'like', "%{$email}%");
        }

        return $user->paginate();
    }

    public function create()
    {
        return User::create($this->extractData());
    }

    public function update(User $user)
    {
        $user->update($this->extractData());
        return $user;
    }

    public function delete(User $user)
    {
        $user->delete();
        return $user;
    }

}
