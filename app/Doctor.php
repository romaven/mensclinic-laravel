<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 * @package App
 */
class Doctor extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'department_id',
        'user_id',
        'specialization_id',
        'experience',
        'photo',
        'title',
        'info',
        'url'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function specializations()
    {
        return $this->belongsTo(Specialization::class, 'specialization_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
