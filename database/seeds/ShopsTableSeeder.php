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
        'rate' => '4',
        'description' => 'ขนมตังแตกและไอติม',
        'place' => 'คลองสาน',
        'created_at' => new DateTime,
        'updated_at' => new DateTime],
      ['id' => 2,
        'name' => 'Candide Books',
        'slug' => 'candide-books',
        'tel' => '028610967',
        'rate' => '3.8',
        'description' => 'waffle brownie',
        'place' => 'คลองสาน',
        'created_at' => new DateTime,
        'updated_at' => new DateTime],
      ['id' => 3,
        'name' => 'Derma Cup Organic Coffee',
        'slug' => 'derma-cup-organic-coffee',
        'tel' => '',
        'rate' => '3.2',
        'description' => 'กาแฟ น้ำ เค้ก',
        'place' => 'คลองสาน',
        'created_at' => new DateTime,
        'updated_at' => new DateTime],
    );

    // Uncomment the below to run the seeder
    DB::table('shops')->insert($shops);
  }

}