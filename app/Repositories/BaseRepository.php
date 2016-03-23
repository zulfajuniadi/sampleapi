<?php

namespace App\Repositories;

use App\User;
use Illuminate\Http\Request;

class BaseRepository
{
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->user = auth()->user();
    }
}
