<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'grade' =>'1'
        ]);
        DB::table('grades')->insert([
            'grade' =>'2'
        ]);
        DB::table('grades')->insert([
            'grade' =>'3'
        ]);
        
        DB::table('grades')->insert([
            'grade' =>'4'
        ]);
        
        DB::table('grades')->insert([
            'grade' =>'5'
        ]);
        
        DB::table('grades')->insert([
            'grade' =>'6'
        ]);
        //
        //
    }
}
