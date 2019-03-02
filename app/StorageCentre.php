<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StorageCentre extends Model
{
    //table name
    protected $table = 'storage_centre';

    //primary key
    public $primaryKey = 'storage_centre_id';

    public $timestamps = false;
}
