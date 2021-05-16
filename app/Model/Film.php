<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    protected $table = 'films';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'name',
        'name2', 'status', 'director',
        'actor', 'category_id', 'type_movie',
        'nation_id', 'year', 'image', 'description',
        'duration', 'num_view', 'author'
    ];
    //eloquent one to type_movies
    public function typeMovies()
    {
        return $this->belongsTo('App\Model\Type_Movie', 'type_movie', 'id');
    }
    //eloquent one to categories
    public function categories()
    {
        return $this->belongsTo('categories', 'category_id', 'id');
    }
}
