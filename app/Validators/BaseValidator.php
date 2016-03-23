<?php

namespace App\Validators;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BaseValidator
{
    public function run()
    {
        $methodName = explode('@', $this->route->getActionName())[1];
        if (is_callable([$this, $methodName])) {
            return $this->$methodName();
        }
        return app('validator')->make([], []);
    }

    protected function validate($rules, $data = [])
    {
        $input = $data + $this->request->all();
        // dd(app('validator')->make($input, $rules)->fails());
        return app('validator')->make($input, $rules);
    }

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->route = $request->route();
        $this->validator = app('validator');
    }
}
