<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'is_done',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
