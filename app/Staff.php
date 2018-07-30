<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
         'fname','lname','email', 'phone_no','address','imagePath','status',
    ];

    //  protected $hidden = [
    //     'password', 'remember_token',
    // ];


}
