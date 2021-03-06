<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * @package App
 */
class Department extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'short_name', 'description', 'url', 'short', 'info', 'keywords'];

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::deleted(function ($department) {
            foreach ($department->doctors as $doctor) {
                $doctor->update(['department_id' => 0]);
            }
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'department_id', 'id');
    }
}
