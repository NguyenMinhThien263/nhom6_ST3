<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name'];

    public function flim()
    {
        return $this->hasMany('film','category_id','id');
    }
}
