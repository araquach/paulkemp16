<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Offer extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    protected $connection = 'mysqljak';
    
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }
    
    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }
    
    public function getStylistLevelAttribute($value)
    {
        return strtoupper($value);
    }
    
    public function getGenderAttribute($value)
    {
        return strtoupper($value);
    }
}
