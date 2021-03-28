<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Riders extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $guard = 'riders';

    protected $fillable = [
        'name', 'email' ,'password', 'phone', 'online_status', 'status', 'device_token',
    ];
    protected $hidden = [
        'password',
    ];
}
