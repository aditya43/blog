<?php

namespace Adi;

use Illuminate\Database\Eloquent\Model;
use \Adi\Http\Requests\AddComment;
use \Carbon\Carbon;

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

    /**
     * Query scope Filter.
     *
     * @param  \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month']))
        {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }

        if (isset($filters['year']))
        {
            $query->whereYear('created_at', $filters['year']);
        }
    }

    public static function archives()
    {
        return static::selectRaw('YEAR(`created_at`) AS year, MONTHNAME(`created_at`) AS month, COUNT(`id`) AS posts')
            ->orderByRaw('MIN(`created_at`) DESC')
            ->groupBy('year', 'month')
            ->get();
    }
}
