<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Specialization
 * @package App
 */
class Specialization extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['specialization'];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'specialization_id', 'id');
    }
}
