<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecificDormFilter extends Model
{

	public function dorm() {
    	$dorms = $this->belongsTo(Dorm::class);
    	return $dorms;
    }

    public function dormFilter() {
    	$filters = $this->belongsTo(DormFilter::class);
    	return $filters;
    }

    public function getFilters() {
    	$filters = array();
    	foreach($this->dormFilter() as $filter) {
    		$filters.push($filter->name);
    	}
    	return $filters;
    }
}
