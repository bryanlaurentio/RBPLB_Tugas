<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = "attachments";

    protected $fillable = [
        'codeOfAttachment',
        'codeOfTopic',
        'titleOfImage',
        'image',
        'file',
    ];

    public function discussionTopic(){
        return $this->belongsTo('App\Attachment');
    }
}
