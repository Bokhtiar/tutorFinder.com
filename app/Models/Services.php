<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    /* database table with primary key */
    protected $table = 'services';
    protected $primaryKey = 'service_id';
    protected $fillable = [
        'title', 'description', 'image',
    ];
}
