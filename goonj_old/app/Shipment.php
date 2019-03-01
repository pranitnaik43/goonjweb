<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    //table name
    protected $table = 'shipment';

    //primary key
    public $primaryKey = 'shipment_id';
}
