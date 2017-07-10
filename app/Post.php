<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';   // de tabel posts

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';   // (???????)

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'category_id', 'upload', 'snippet'];   // de onderdelen die moeten worden ingevuld.

    /**
    * Get the category record associated with the post.
    */
    public function category()
    {
      return $this->belongsTo('App\Category');    // heeft iets te maken met Category.php ????????
    }

}
