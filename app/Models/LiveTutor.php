<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class LiveTutor extends Model
{
    protected $table = "live_tutors";
    protected $primaryKey = 'codeLiveTutor';

    use HasFactory;
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
