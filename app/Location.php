<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

	public function shops() {
    return $this->belongsToMany('App\Shop', 'nearbies', 'location_id', 'shop_id');
  }

}
