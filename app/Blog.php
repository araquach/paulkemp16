<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    public function pics()
    {
        return $this->hasMany('App\BlogPic')->orderBy('id', 'desc');
    }
    
    public function paras()
    {
        return $this->hasMany('App\BlogPara')->orderBy('id', 'desc');
    }
}
