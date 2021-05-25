<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    public $timestamps = false;
    protected $table = "materis";

    protected $fillable = [
        'codeOfMateri',
        'titleOfMateri',
        'nameOfTutor',
        'linkVideo',
        'categoryUser',
        'categoryMateri',
    ];
}
