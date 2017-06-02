<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticeCategory
 * @package App
 */
class ArticeCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'url'];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }
}
