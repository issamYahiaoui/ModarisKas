<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sParent extends Model
{
    //
    protected  $fillable = ['user_id'] ;

    public function user(){
        return $this->belongsTo('App\User') ;
    }
}
