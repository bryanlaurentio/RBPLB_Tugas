<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveTutor extends Model
{
    protected $fillable = [
        'codeLiveTutor',
        'nameOfLiveTutor',
        'nameOfTutorInLiveTutor',
        'dateLiveTutor',
        'durationLiveTutor',
        'statusLiveTutor',
    ];
}
