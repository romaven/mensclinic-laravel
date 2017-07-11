<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App
 */
class News extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'url', 'keywords', 'description'
    ];
}
