<?php

namespace App\Validators;

class TasksValidator extends BaseValidator
{

    protected function store()
    {
        return $this->validate([
            'title' => 'required',
            'is_done' => 'boolean',
        ]);
    }

    protected function update()
    {
        return $this->validate([
            'title' => 'required_without:is_done',
            'is_done' => 'required_without:title',
        ]);
    }
}
