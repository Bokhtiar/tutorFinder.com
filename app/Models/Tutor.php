<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tutor extends Model
{
    use HasFactory;
    /* database table with primary key */
    protected $table = 'tutors';
    protected $primaryKey = 'tutor_id';
    protected $fillable = [
        'name', 'email', 'phone',
        'subject_id', 'tutor_hour', 'weekly_day',
        'fee', 'fb', 'insta', 'linkdin',
        'country_id', 'state_id', 'city_id',
        'village_id', 'address', 'bio', 'image' 
    ];
}
