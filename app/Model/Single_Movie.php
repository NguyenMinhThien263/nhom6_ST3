<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Single_Movie extends Model
{
    //
    //
    protected $table = 'single_movies';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','year'];

}
