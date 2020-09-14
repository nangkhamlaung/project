<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    protected $fillable = [
        'name','title_id'
    ];
    public function title($value='')
    {
    	return $this->belongsTo('App\Title');
    }
      public function answers($value='')
     {
    	return $this->hasMany('App\Answer');
    }

}


// <?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class Knowledge extends Model
// {
//      protected $fillable = [
//         'name','photo','description'
//     ];
// }







