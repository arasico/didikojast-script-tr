<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = Constants::USERS_DB;
    protected $casts = [
        'info' => 'array',
    ];
    protected $fillable = ['type', 'name', 'phone', 'email', 'username', 'password', 'active', 'type_phone', 'auto_charge', 'expire_at', 'info', 'updated_at', 'created_at', 'type_row'];
    protected $hidden = ['password', 'remember_token',];
    public $timestamps = false;
}
