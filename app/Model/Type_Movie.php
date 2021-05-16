<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Type_Movie extends Model
{
    //
    protected $table = 'type_movies';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','handle'];

    public function flim()
    {
        return $this->hasMany('App\Model\Film','type_movie','id');
    }
}
