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
        'wifi' => false,
        'parking' => false,
        'credit_card' => false,
        'created_at' => new DateTime,
        'updated_at' => new DateTime],
      ['id' => 2,
        'name' => 'Candide Books',
        'slug' => 'candide-books',
        'tel' => '028610967',
        'open_time' => '11:00:00',
        'close_time' => '20:00:00',
        'open_day' => 'ทุกวัน',
        'min_price' => '100',
        'max_price' => '250',
        'building' => 'โครงการ The Jam Factory',
        'district' => 'คลองต้นไทร',
        'area' => 'คลองสาน',
        'wifi' => true,
        'parking' => true,
        'credit_card' => false,
        'created_at' => new DateTime,
        'updated_at' => new DateTime],
      ['id' => 3,
        'name' => 'Derma Cup Organic Coffee',
        'slug' => 'derma-cup-organic-coffee',
        'tel' => '027519968',
        'open_time' => '10:00:00',
        'close_time' => '21:00:00',
        'open_day' => 'ทุกวัน',
        'min_price' => '0',
        'max_price' => '100',
        'building' => 'Sena Fest',
        'district' => 'คลองต้นไทร',
        'area' => 'คลองสาน',
        'wifi' => false,
        'parking' => true,
        'credit_card' => false,
        'created_at' => new DateTime,
        'updated_at' => new DateTime],
      ['id' => 4,
        'name' => 'Take.a.shot',
        'slug' => 'take-a-shot',
        'tel' => '028601776',
        'open_time' => '06:30:00',
        'close_time' => '21:00:00',
        'open_day' => 'ทุกวัน',
        'min_price' => '100',
        'max_price' => '250',
        'building' => 'ปั๊มเชลล์สาขาเจริญนคร',
        'district' => 'บางลำภูล่าง',
        'area' => 'คลองสาน',
        'wifi' => true,
        'parking' => true,
        'credit_card' => false,
        'created_at' => new DateTime,
        'updated_at' => new DateTime],
    );

    // Uncomment the below to run the seeder
    DB::table('shops')->insert($shops);
  }

}