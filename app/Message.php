<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class,'userId','id');
    }
}
