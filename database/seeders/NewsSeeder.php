<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('news')->insert($this->getNews());
       
    }


    public function getNews()
    {
    //    $faker= Faker\Factory::create('ru_RU');


    for($i = 0; $i < 10; $i++){

        $data[] = [
    
            'category_id' => '1',
            'image' => '',
            'is_private' =>rand(0,1),
            'title' => Str::random(10),
            'text' => Str::random(300),
            'spoiler' => '',
                   
        ];

    }

    return $data;

    }
}
