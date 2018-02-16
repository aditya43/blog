<?php

namespace Adi;

use Illuminate\Database\Eloquent\Model;
use \Adi\Http\Requests\AddComment;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment(AddComment $request)
    {
        $this->comments()->create($request->all());
    }
}
