<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerRequest extends Model
{

	public function maderequest()
	{
    	return $this->belongsTo('App\Customer');
    }

    }
