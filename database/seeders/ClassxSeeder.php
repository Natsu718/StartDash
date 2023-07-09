<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classxes')->insert([
            'classx' =>'1'
        ]);
        DB::table('classxes')->insert([
            'classx' =>'2'
        ]);
        DB::table('classxes')->insert([
            'classx' =>'3'
    }
}
