<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    protected $table = 'nations';
    protected $guarded = ['nation_id'];
}
