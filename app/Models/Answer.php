<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "answers";

    protected $fillable = [
        'codeOfAnswer',
        'codeOfTopic',
        'nameOfAnswer',
        'filledAnswer',
    ];

    public function discussionTopic(){
        return $this->belongsTo('App\Answer');
    }
}
