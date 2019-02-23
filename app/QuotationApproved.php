<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuotationApproved extends Model
{
    //table name
    protected $table = 'quotation_approved';

    //primary key
    public $primaryKey = 'quotation_a_id';
}
