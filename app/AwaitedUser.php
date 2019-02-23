<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AwaitedUser extends Model
{
    //table name
    protected $table = 'awaited_user';

    //primary key
    public $primaryKey = 'waiting_list_no';

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
