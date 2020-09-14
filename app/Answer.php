<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
     protected $fillable = [
        'name','question_id'
    ];
    public function question($value='')
    {
        return $this->belongsTo('App\Question');
    }
}
