<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Nav_Menu extends Model
{
    //
    protected $table = 'nav_menus';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','handle'];
}
