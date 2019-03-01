<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='user';
    public $timestamps = false;
    protected $fillable = [
        // 'email', 'password',
        // 'first_name',
        // 'middle_name',
        // 'last_name',
        // 'email',
        // 'password',
        // 'contact_no',
        // 'alternative_contact_no',
        // 'address_line_1',
        // 'address_line_2',
        // 'address_line_3',
        // 'city',
        // 'state',
        // 'country',
        // 'postal_code',
        // 'type_of_role',
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
