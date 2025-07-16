<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['payment_method'];
    public function customerRequests()
        {
            return $this->hasMany(CustomerRequest::class, 'payment_method_id');
        }
}
