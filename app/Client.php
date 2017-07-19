<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [

    'name', 'email', 'phone_num', 'company_name', 'content', 'user_id'

    ];

    public function getCompanyNameAttribute($value) {

    	return strtoupper($value);
    }

    
}
