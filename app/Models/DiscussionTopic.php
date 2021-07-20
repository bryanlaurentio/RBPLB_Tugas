<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscussionTopic extends Model
{
    protected $table = "discussion_topics";
    protected $primaryKey = 'codeOfTopic';
    use HasFactory;

    protected $fillable = [
        'codeOfTopic',
        'nameOfTopic',
        'categoryOfTopic',
        'topicDescription',
    ];

    public function answer(){
        return $this->hasMany('App\Answer');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }

    public function attachment(){
        return $this->hasMany('App\Attachment');
    }
}
