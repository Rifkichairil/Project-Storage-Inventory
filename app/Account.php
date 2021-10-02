<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable
{
    //
    protected $table = 'accounts';

    protected $fillable = [
        'username',
        'password',
        'created_at'
    ];
    protected $hidden = [
        'password',
    ];
}
