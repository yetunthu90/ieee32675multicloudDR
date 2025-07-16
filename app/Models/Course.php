<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'course_name',
        'duration',
        'start_date',
        'end_date',
        'capacity',
        'price',
        'description',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            $latestCourse = self::latest('id')->first();
            $nextNumber = $latestCourse ? ((int) substr($latestCourse->course_id, -4)) + 1 : 1;

            $course->course_id = 'RCA-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        });
    }
    public function customerRequests()
        {
            return $this->hasMany(CustomerRequest::class, 'course_id');
        }
    // Define the many-to-many relationship with User
    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user');
    }
}
