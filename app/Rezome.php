<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezome extends Model
{
    public function job()
    {
        return $this->belongsTo(Job::class,'jobId','id');
    }

    public function User()
    {
        return $this->belongsTo(User::class,'userId','id');
    }
    public function GetStatus()
    {
        switch ($this->status)
        {
            case 0:
                return 'ارسال شده';
                break;
            case 1:
                return 'در حال بررسی';
                break;
            case 2:
                return 'رد شده';
                break;
            case 3:
                return 'تایید شده';
                break;
        }
    }

    public function Messages()
    {
        return $this->hasMany(Message::class,'rezId','id')->orderBy('messages.id','desc');
    }

}
