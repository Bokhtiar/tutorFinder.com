<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory; 
    /* database table with primary key */
    protected $table = 'students';
    protected $primaryKey = 'student_id';
    protected $fillable = [
        'name', 'email', 'phone', 'user_id',
        'subject_id', 'class', 'institut_name',
        'country_id', 'state_id', 'city_id',
        'village_id', 'address', 'bio', 'image' 
    ];
}
