<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = "attachments";
    use HasFactory;

    protected $fillable = [
        'codeOfAttachment',
        'codeOfTopic',
        'titleOfAttachment',
        'file',
    ];

    public function discussionTopic(){
        return $this->belongsTo('App\Attachment');
    }
}
