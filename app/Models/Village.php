<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;
     /* database table with primary key */
     protected $table = 'villages';
     protected $primaryKey = 'village_id';
     protected $fillable = [
         'city_id', 'village_name'
     ];

     public function city()
     {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
     }
 
}
