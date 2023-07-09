<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('schools')->insert([
            'school' => 'A学校',
        ]);
        
        DB::table('schools')->insert([
            'school' => 'B学校',
        ]);
        
        DB::table('schools')->insert([
            'school' => 'C学校',
        ]);
    }
    
}
