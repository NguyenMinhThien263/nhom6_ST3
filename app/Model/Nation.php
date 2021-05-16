<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    //
    protected $table = 'nations';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name'];
}
