<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveTutor extends Model
{
    protected $table = "discussion_topics";
    protected $primaryKey = 'codeOfTopic';

    protected $fillable = [
        'codeLiveTutor',
        'nameOfLiveTutor',
        'nameOfTutorInLiveTutor',
        'dateLiveTutor',
        'durationLiveTutor',
        'statusLiveTutor',
    ];

    //public function answer(){
    //    return $this->hasMany('App\Answer');
    //}

    //public function comment(){
    //   return $this->hasMany('App\Comment');
    //}

    //public function attachment(){
    //    return $this->hasMany('App\Attachment');
    //}
}
