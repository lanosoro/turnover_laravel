<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //tablename 
    protected $table='';
    //Primary Key
    public $primaryKey='id';
    //Timestamps
    public $timestamps =true;
}
