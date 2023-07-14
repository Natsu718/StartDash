<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('posts')->insert([
           'user_id' =>1,
            'date' => '2023/07/09',
            'weather'=>'晴れ',
            'daily' => 'StartDashかましたるわ！！',
            'image'=>'',
            'task'=>'ハッカソン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        
    }
}
