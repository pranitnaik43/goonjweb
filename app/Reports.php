<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    //table name
    protected $table = 'reports';

    //primary key
    public $primaryKey = 'report_id';
}
