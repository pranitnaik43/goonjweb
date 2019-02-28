<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\AwaitedUser as Authenticatable;

class Users extends Authenticatable
// class Users extends Model
{
    //table name
    protected $table = 'users';

    //primary key
    public $primaryKey = 'user_id';
    public $timestamps = false;
    protected $fillable = [
        'email_id', 'password',
    ];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
