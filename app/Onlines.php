<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onlines extends Model
{
    //
    protected $fillable=['meeting_id','host_id','name','start_time','duration','start_url','join_url','password','permission','etat','description','capacity','participants','join','category'];

}
