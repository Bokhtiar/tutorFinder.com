<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    /* database table with primary key */
    protected $table = 'countries';
    protected $primaryKey = 'country_id';
    protected $fillable = [
        'country_name'
    ];
}
