<?php

namespace App\Validators;

class UsersValidator extends BaseValidator
{

    protected function postRegister()
    {
        return $this->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required|min:8',
        ]);
    }

    protected function store()
    {
        return $this->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required|min:8',
        ]);
    }

    protected function update()
    {
        return $this->validate([
            'email' => 'required_without_all:name,password|unique:users,email,' . $this->route->parameter('users')->id,
            'name' => 'required_without_all:email,password',
            'password' => 'required_without_all:email,name|min:8',
        ]);
    }
}
