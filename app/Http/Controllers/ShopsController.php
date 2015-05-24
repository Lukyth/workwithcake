<?php namespace App\Http\Controllers;

use App\Shop;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ShopsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$shops = Shop::all();
		return view('shops.index', compact('shops'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('shops.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Shop $shop
	 * @return Response
	 */
	public function show(Shop $shop)
	{
		return view('shops.show', compact('shop'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Shop $shop
	 * @return Response
	 */
	public function edit(Shop $shop)
	{
		return view('shops.edit', compact('shop'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Shop $shop
	 * @return Response
	 */
	public function update(Shop $shop)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Shop $shop
	 * @return Response
	 */
	public function destroy(Shop $shop)
	{
		//
	}

}
