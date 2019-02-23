<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalDoc extends Model
{
    //table name
    protected $table = 'legal_doc';

    //primary key
    public $primaryKey = 'legal_doc_id';
}
