<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
  protected $table = 'section';    // de tabel categories.

  protected $fillable = ['name'];   // de onderdelen die moeten worden ingevuld, in dit geval is dat name.

  public function entries(){

      

 }
}
