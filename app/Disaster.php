<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disaster extends Model
{
    //table name
    protected $table = 'disaster';

    //primary key
    public $primaryKey = 'disaster_id';

    public $timestamps = false;
}
