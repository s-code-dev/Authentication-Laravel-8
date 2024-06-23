<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          \DB::table('categories')->insert([

            ['id'=>'1',
                'slug'=>'sport',
                'title'=>'Новость о спотре',

            ],
            ['id'=>'2',
                'slug'=>'programming',
                'title'=>'Новость о программировании',


            ],
            ['id'=>'3',
                'slug'=>'games',
                'title'=>'Новость о компьютерных играх',

            ],

            ['id'=>'4',
                'slug'=>'city',
                'title'=>'Новость города',

            ],

        ]);
    }
}
