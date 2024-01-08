<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class officialtranscript extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('personal_infos')->insert([
            'firstname'=>'muhmmed',
            'fathername'=>'hssen',
            'lastname'=>'hmed',
            'email'=>'m@gmail.com',
        ]);
    }
}
