<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //table name
    protected $table = 'order';

    //primary key
    public $primaryKey = 'order_id';
}
