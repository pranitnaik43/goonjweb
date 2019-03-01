<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    //table name
    protected $table = 'quotation';

    //primary key
    public $primaryKey = 'quotation_id';
}
