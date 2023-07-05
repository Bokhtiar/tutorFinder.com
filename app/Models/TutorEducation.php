<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorEducation extends Model
{
    use HasFactory;
    /* database table with primary key */
    protected $table = 'tutor_education';
    protected $primaryKey = 'tutor_education_id';
    protected $fillable = [
        'tutor_id', 
        'institute_name',
        'degree_name', 
        'result',
    ];

    /* tutor */
    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'tutor_id', 'tutor_id');
    }
}
