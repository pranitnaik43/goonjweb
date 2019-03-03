<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkpoints extends Model
{
    //table name
    protected $table = 'checkpoints';

    //primary key
    public $primaryKey = 'checkpoint_no';
}
