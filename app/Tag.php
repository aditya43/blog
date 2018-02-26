<?php

namespace Adi;

use Illuminate\Database\Eloquent\Model;
use \Adi\Post;

class Tag extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
