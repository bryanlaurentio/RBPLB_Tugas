<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = "materials";
    protected $primaryKey = 'codeOfMaterial';

    protected $fillable = [
        'codeOfMaterial' ,
        'titleOfMaterial',
        'nameOfTutor',
        'linkVideo',
        'categoryUser',
        'categoryMaterial',
    ];
}
