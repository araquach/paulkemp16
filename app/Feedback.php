<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $guarded = ['id'];
    
    public function client()
    {
        return $this->hasOne('App\FeedbackClient', 'id');
    }
}
