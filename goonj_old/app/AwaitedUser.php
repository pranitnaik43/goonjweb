<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\AwaitedUser as Authenticatable;

class AwaitedUser extends Authenticatable
// class AwaitedUser extends Model
{
    //table name
    protected $table = 'awaited_user';

    //primary key
    public $primaryKey = 'waiting_list_no';

    public $timestamps = false;

    protected $fillable = [
        
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'remember_token',
        'contact_no',
        'alternative_contact_no',
        'address_line_1',
        'address_line_2',
        'address_line_3',
        'city',
        'state',
        'country',
        'postal_code',
        'type_of_role',
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
