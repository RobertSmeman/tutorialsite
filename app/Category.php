<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';    // de tabel categories.

    protected $fillable = ['name'];   // de onderdelen die moeten worden ingevuld, in dit geval is dat name.

    public function entries(){

        return $this->hasMany('App\Post');    // heeft iets te maken met Post.php ???????

    }
}
