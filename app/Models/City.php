<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    /* database table with primary key */
    protected $table = 'cities';
    protected $primaryKey = 'city_id';
    protected $fillable = [
        'state_id',
        'city_name'
    ];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id', 'state_id');
    }
}
