<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $fillable = [
         'fname','lname','email', 'phone_no','address','imagePath','ac_balance','ac_number','ac_type',
    ];


    


    public function myrequest(){
    	return $this->hasMany('App\CustomerRequest');
    }
}
