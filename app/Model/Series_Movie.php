<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Series_Movie extends Model
{
    //
    //
    protected $table = 'series_movies';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','year'];

}
