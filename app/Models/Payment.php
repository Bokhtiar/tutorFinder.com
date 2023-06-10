<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    /* database table with primary key */
    protected $table = 'payments';
    protected $primaryKey = 'payment_id';
    protected $fillable = [
        'amount',
        'user_id',
        'tutor_id',
        'payment_name',
        'payment_number',
        'transection_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'tutor_id', 'tutor_id');
    }
}
