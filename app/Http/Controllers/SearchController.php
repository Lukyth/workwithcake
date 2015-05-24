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
		$query = '';

		if ($input['name']) {
			$query .= ' and `name` like "%' . $input['name'] . '%"';
		}

		if ($input['tel']) {
			$query .= ' and `tel` like "%' . $input['tel'] . '%"';
		}

		if ($input['description']) {
			$query .= ' and `description` like "%' . $input['description'] . '%"';
		}

		if ($input['place']) {
			$query .= ' and `place` like "%' . $input['place'] . '%"';
		}

		$shops = Shop::whereRaw('1' . $query)->orderBy('created_at')->get();

		return view('search.show')->with('shops', $shops);
	}

}
