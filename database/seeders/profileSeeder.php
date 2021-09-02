<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class profileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       DB::table('profiles')->insert([
            'user_id' => 1,
            'title'=>'Take life as it comes',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur nesciunt natus vel delectus culpa expedita, debitis non sapiente aspernatur veniam.',
            'url'=>'ishan@gmail.com'
        ]);
       DB::table('profiles')->insert([
            'user_id' => 2,
            'title'=>'Cool life',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur nesciunt natus vel delectus culpa expedita, debitis non sapiente aspernatur veniam.',
            'url'=>'vinod@gmail.com'
        ]);

    }
}
