<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //table name
    protected $table = 'users';

    //primary key
    public $primaryKey = 'user_id';

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
