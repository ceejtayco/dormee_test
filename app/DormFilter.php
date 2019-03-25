<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DormFilter extends Model
{
     public function specificDormFilter() {
    	$filters = $this->hasMany(SpecificDormFilter::class);
    	return $filters;
    }

    public function dorm() {
    	return $this->belongsToMany(Dorm::class, 'specific_dorm_filters', 'dorm_id');
    }
}
