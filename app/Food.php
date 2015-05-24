<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model {

	public function shops() {
    return $this->belongsToMany('App\Shop', 'menus', 'food_id', 'shop_id');
  }

}
