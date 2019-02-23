<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnsiteTeam extends Model
{
    //table name
    protected $table = 'onsite_team';

    //primary key
    public $primaryKey = 'team_id';
}
