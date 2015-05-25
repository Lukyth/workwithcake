<?php namespace App\Http\Controllers;

use App\Shop;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Input;

class SearchController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('search.index');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Input::all();
		$query = '1';
		foreach ($input as $key => $value) {
			if ($value != '' && $key != '_token') {
				if ($key == 'nearby') {
					$query .= ' and exists ( select * from `nearbies` where shops.id = nearbies.shop_id and exists ( select * from `locations` where `area` like "%' . $value . '%" and locations.id = nearbies.location_id ) )';
				}
				else if ($key == 'food') {
					$query .= ' and exists ( select * from `menus` where shops.id = menus.shop_id and exists ( select * from `foods` where `dessert` like "%' . $value . '%" and foods.id = menus.food_id ) )';
				}
				else if ($key == 'open_time' || $key == 'min_price') {
					$query .= ' and `' . $key . '` >= ' . '"' . $value . '"';
				}
				else if ($key == 'close_time' || $key == 'max_price') {
					$query .= ' and `' . $key . '` <= ' . '"' . $value . '"';
				}
				else if ($key == 'wifi' || $key == 'parking' || $key == 'credit_card') {
					$query .= ' and `' . $key . '` = ' . '"' . $value . '"';
				}
				else {
					$query .= ' and `' . $key . '` like "%' . $value . '%"';
				}
			}
		}

		$shops = Shop::whereRaw($query)->orderBy('created_at')->get();
		// $shops = Shop::whereRaw($query)->paginate(12);
		// $shops->setPath('search');

		return view('search.show')->with('shops', $shops);
	}

}
