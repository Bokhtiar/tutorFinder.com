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
        'name', 'email', 'phone', 'user_id',
        'subject_id', 'tutor_hour', 'weekly_day',
        'fee', 'fb', 'insta', 'linkdin',
        'country_id', 'state_id', 'city_id',
        'village_id', 'address', 'bio', 'image' 
    ]; 

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'country_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id', 'state_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }


    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id', 'village_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'subject_id');
    }
}
