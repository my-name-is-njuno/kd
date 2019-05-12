<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }


    public function setLocationAttribute($value)
    {
        $this->attributes['location'] = ucwords(strtolower($value));
    }



    public function setMessageAttribute($value)
    {
        $this->attributes['message'] = ucfirst(strtolower($value));
    }



    public function ifViewed() {
    	if($this->view) {
    		return true;
    	}

    	return false;
    }

}
