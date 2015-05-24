<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration {

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
			$table->text('district')->default('');
			$table->text('area')->default('');
			$table->boolean('wifi')->default(false);
			$table->boolean('parking')->default(false);
			$table->boolean('credit_card')->default(false);
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
	}

}
