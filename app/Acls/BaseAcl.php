<?php

namespace App\Acls;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BaseAcl
{
    public function run()
    {
        $methodName = explode('@', $this->route->getActionName())[1];
        if (is_callable([$this, $methodName])) {
            return $this->$methodName();
        }
        return true;
    }

    public function __construct(Request $request)
    {
        $this->user = auth()->user() ?: new User;
        $this->request = $request;
        $this->route = $request->route();
    }
}
