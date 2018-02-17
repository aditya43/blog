<?php

namespace Adi;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['body'];

    /**
     * Comment belongs to Post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Comment belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        // belongsTo(RelatedModel, foreignKey = user_id, keyOnRelatedModel = id)
        return $this->belongsTo(User::class);
    }
}
