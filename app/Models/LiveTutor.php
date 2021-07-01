<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveTutor extends Model
{
    protected $table = "live_tutors";
    protected $primaryKey = 'codeLiveTutor';

    protected $fillable = [
        'codeLiveTutor',
        'nameOfLiveTutor',
        'nameOfTutorInLiveTutor',
        'dateLiveTutor',
        'durationLiveTutor',
        'statusLiveTutor',
        'linkLiveTutor',
    ];
}
