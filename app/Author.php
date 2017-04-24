<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function quotes() {
    	return $this->hasMany('App\Quote');		//one to many relation as one author can have many quotes
    }
}
