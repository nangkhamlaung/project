<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = [
        'name'
    ];

    public function questions($value='')
    {
    	return $this->hasMany('App\Question');
    }
}
