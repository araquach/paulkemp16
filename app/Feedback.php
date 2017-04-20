<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    protected $table = 'feedbacks_pk';
    
    public function client()
    {
        return $this->belongsTo('App\FeedbackClient');
    }
}
