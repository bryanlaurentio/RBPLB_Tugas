<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestLiveTutor extends Model
{
    protected $table = "request_live_tutors";
    protected $primaryKey = 'codeOfLiveTutor';

    protected $fillable = [
        'codeOfLiveTutor',
        'nameOfLiveTutor',
        'dateLiveTutor',
    ];
}
