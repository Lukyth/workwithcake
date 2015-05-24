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

				}
				else if ($key == 'food') {

				}
				else if ($key == 'open_time' || $key == 'min_price') {
					$query .= ' and `' . $key . '` >= ' . '"' . $value . '"';
				}
				else if ($key == 'close_time' || $key == 'max_price') {
					$query .= ' and `' . $key . '` <= ' . '"' . $value . '"';
				}
				else {
					$query .= ' and `' . $key . '` like "%' . $value . '%"';
				}
			}
		}

		$shops = Shop::whereRaw($query)->orderBy('created_at')->get();

		return view('search.show')->with('shops', $shops);
	}

}
