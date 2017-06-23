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
        'full_name',
        'specialization',
        'experience',
        'photo',
        'info',
        'url',
        'description',
        'keywords',
        'show_in_catalog',
        'show_in_main_page'
    ];

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

    /**
     * @return string
     */
    public function getNameAttribute()
    {
        if ($this->attributes['department_id'] === 0) return 'Врач не добавлен ни в одно отделене';

        return $this->department->name;
    }
}
