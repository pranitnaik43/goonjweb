<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipmentDetails extends Model
{
    //table name
    protected $table = 'shipment_details';

    //primary key
    public $primaryKey = 'shipment_id';
}
