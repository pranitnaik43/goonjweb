<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //table name
    protected $table = 'role';

    //primary key
    public $primaryKey = 'role_id';
}
