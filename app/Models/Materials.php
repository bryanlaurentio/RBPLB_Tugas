<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    public $timestamps = false;
    protected $table = "materials";

    protected $fillable = [
        'codeOfMaterial',
        'titleOfMaterial',
        'nameOfTutor',
        'linkVideo',
        'categoryUser',
        'categoryMaterial',
    ];
}
