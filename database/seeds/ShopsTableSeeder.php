<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder {

  public function run()
  {
    // Uncomment the below to wipe the table clean before populating
    DB::table('shops')->delete();

    $shops = array(
      ['id' => 1,
        'name' => 'ติมถังแตก',
        'slug' => 'tim-tung-tak',
        'tel' => '0847152231',
        'open_time' => '17:00:00',
        'close_time' => '22:30:00',
        'open_day' => 'ทุกวัน',
        'min_price' => '100',
        'max_price' => '250',
        'building' => 'อาคารส่วนบุคคล',
        'district' => 'คลองต้นไทร',
        'area' => 'คลองสาน',
        'wifi' => 'N',
        'parking' => 'N',
        'credit_card' => 'N',
        'created_at' => new DateTime,
        'updated_at' => new DateTime],
    );

    // Uncomment the below to run the seeder
    DB::table('shops')->insert($shops);
  }

}