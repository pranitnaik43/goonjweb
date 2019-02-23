<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //table name
    protected $table = 'job';

    //primary key
    public $primaryKey = 'user_id';
}
