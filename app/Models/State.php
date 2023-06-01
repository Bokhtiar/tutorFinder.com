<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    /* database table with primary key */
    protected $table = 'states';
    protected $primaryKey = 'state_id';
    protected $fillable = [
        'country_id', 'state_name'
    ];

    /* reletionship */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'country_id');
    }
}
