<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App
 */
class Article extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'category_id', 'title', 'body', 'url'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ArticeCategory::class, 'category_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
