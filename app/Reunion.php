<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    //
    protected $fillable=['host_id','participants','title','categorie','language','expire'];
}
