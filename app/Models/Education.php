<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'institution_name',
        'institution_logo',
        'career',
        'degree_title',
        'start_year',
        'end_year',
        'description',
    ];

}
