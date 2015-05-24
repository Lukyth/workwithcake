<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model {

	public function foods() {
    return $this->belongsToMany('App\Food', 'menus', 'shop_id', 'food_id');
  }

  public function locations() {
    return $this->belongsToMany('App\Location', 'nearbies', 'shop_id', 'location_id');
  }

}
