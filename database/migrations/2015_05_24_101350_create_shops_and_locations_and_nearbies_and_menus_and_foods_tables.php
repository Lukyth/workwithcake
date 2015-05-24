<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsAndLocationsAndNearbiesAndMenusAndFoodsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shops', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
			$table->string('slug')->default('');
			$table->string('tel')->default('');
			$table->time('open_time')->default('00:00:00');
			$table->time('close_time')->default('23:59:59');
			$table->string('open_day')->default('');
			$table->integer('min_price')->default(0);
			$table->integer('max_price')->default(1000000);
			$table->text('building')->default('');
			$table->string('district')->default('');
			$table->string('area')->default('');
			$table->boolean('wifi')->default(false);
			$table->boolean('parking')->default(false);
			$table->boolean('credit_card')->default(false);
			$table->timestamps();
		});

		Schema::create('locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('area')->default('');
			$table->timestamps();
		});

		Schema::create('foods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('dessert')->default('');
			$table->timestamps();
		});

		Schema::create('menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('shop_id')->unsigned()->default(0);
			$table->foreign('shop_id')->references('id')->on('shops');
			$table->integer('food_id')->unsigned()->default(0);
			$table->foreign('food_id')->references('id')->on('foods');
			$table->timestamps();
		});

		Schema::create('nearbies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('shop_id')->unsigned()->default(0);
			$table->foreign('shop_id')->references('id')->on('shops');
			$table->integer('location_id')->unsigned()->default(0);
			$table->foreign('location_id')->references('id')->on('locations');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shops');
		Schema::drop('locations');
		Schema::drop('menus');
		Schema::drop('nearbies');
		Schema::drop('foods');
	}

}
