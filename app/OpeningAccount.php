<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpeningAccount extends Model
{
    protected $fillable = [
        'first_name','surname','other_name','maiden_name','gender','date_of_birth','occupation','email',
        'nationality','location','contact','contact2','account_type','personal_id','valid_date',
   ];
}
