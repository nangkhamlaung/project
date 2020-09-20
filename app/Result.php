<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'title_id','user_id','total'
    ];
    public function title($value='')
    {
    	return $this->belongsTo('App\Title');
    }
    public function user($value='')
	{
	return $this->belongsTo('App\User');
	}

}
