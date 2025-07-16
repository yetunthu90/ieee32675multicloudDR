<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'course_id',
        'start_date',
        'nice_to_have',
        'payment_method_id',
        'message',
    ];
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_method_id');
    }
}
