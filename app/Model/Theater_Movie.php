<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Theater_Movie extends Model
{
    //
    //
    protected $table = 'theater_movies';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','year'];

}
