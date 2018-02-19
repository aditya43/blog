<?php

namespace Adi;

use Illuminate\Database\Eloquent\Model;
use \Adi\Http\Requests\AddComment;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    /**
     * Post has many Comments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Post belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function addComment(AddComment $request)
    // {
    //     $this->comments()->create([
    //         'user_id' => auth()->user()->id,
    //         'body'    => $request->body
    //     ]);
    // }
}
