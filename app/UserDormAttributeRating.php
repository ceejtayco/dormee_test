<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class UserDormAttributeRating extends Model
{
    public function getRatings($id) {
    	return DB::table('user_dorm_attribute_ratings')->where([
    			['user_id', '=', $id]
    		])->get('rating');
    }

    public function getRawRatings($id) {
    	return DB::select("SELECT attributes.name, user_dorm_attribute_ratings.rating FROM dorm_attributes JOIN dorms on dorm_attributes.dorm_id = dorms.id JOIN attributes on dorm_attributes.attribute_id = attributes.id JOIN user_dorm_attribute_ratings ON user_dorm_attribute_ratings.dorm_attribute_id = dorm_attributes.id WHERE dorm_id = " . $id);
    }

    public function getSpecificRatings($did, $aid) {
    	$avg = DB::select(DB::raw("SELECT ROUND(AVG(user_dorm_attribute_ratings.rating)) AS 'avg' FROM dorm_attributes JOIN dorms on dorm_attributes.dorm_id = dorms.id JOIN attributes on dorm_attributes.attribute_id = attributes.id JOIN user_dorm_attribute_ratings ON user_dorm_attribute_ratings.dorm_attribute_id = dorm_attributes.id WHERE dorm_id = " . $did . " AND attribute_id = " . $aid));
        $avg = json_decode( json_encode($avg), true);

    	return $avg;
    }

    public function dormAttribute() {
    	return $this->belongsTo(DormAttribute::class);
    }

    public function user() {
    	return $this->belongsTo(User::class);
    }
}
