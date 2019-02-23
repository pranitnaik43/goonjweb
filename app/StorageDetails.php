<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StorageDetails extends Model
{
    //table name
    protected $table = 'storage_details';

    //primary key
    public $primaryKey = 'relief_centre_id';
}
